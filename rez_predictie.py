from flask import Flask, render_template, redirect, request, session, url_for
import joblib
import mysql.connector
import pandas as pd

app = Flask(__name__)
# Cheia secretă pentru sesiunea utilizatorului
app.secret_key = '1204'
model = joblib.load('model.pkl')
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="healthfox",
    autocommit=True
)


@app.route('/rezultat.php')
def rezultat():
    prediction = request.args.get('prediction')
    return render_template('rezultat.php', prediction=prediction)


@app.route('/predictie_user.php', methods=['GET', 'POST'])
def predictie_user():

    if request.method == 'POST':
        # Obțineți datele din formular
        gender = request.form['gender']
        age = int(request.form['age'])
        hypertension = int(request.form['hypertension'])
        heart_disease = int(request.form['heart_disease'])
        smoking_history = request.form['smoking_history']
        bmi = float(request.form['bmi'])
        hba1c_level = float(request.form['hba1c_level'])
        blood_glucose_level = float(request.form['blood_glucose_level'])

        # Preprocesați datele de intrare
        gender_conversion_dict = {'Male': 0, 'Female': 1}
        gender_numeric = gender_conversion_dict.get(gender, -1)

        smoking_history_conversion_dict = {
            'never': 0, 'No Info': 1, 'current': 2, 'ever': 3, 'not current': 4, 'former': 5}
        smoking_history_numeric = smoking_history_conversion_dict.get(
            smoking_history, -1)

        input_data = pd.DataFrame({
            'gender_numeric': [gender_numeric],
            'age': [age],
            'hypertension': [hypertension],
            'heart_disease': [heart_disease],
            'smoking_history_numeric': [smoking_history_numeric],
            'bmi': [bmi],
            'HbA1c_level': [hba1c_level],
            'blood_glucose_level': [blood_glucose_level]
        })

        # Realizați predicția utilizând modelul
        prediction = model.predict(input_data)[0]

        # Obțineți ID-ul utilizatorului din sesiune
        user_id = session.get('user_id')

        # Salvati rezultatul în baza de date
        try:
            cursor = db.cursor()
            query = "INSERT INTO rezultate (user_id, gender, age, hypertension, heart_disease, smoking_history, bmi, hba1c_level, blood_glucose_level, prediction) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"
            values = (user_id, gender, age, hypertension, heart_disease,
                      smoking_history, bmi, hba1c_level, blood_glucose_level, prediction)
            cursor.execute(query, values)
            db.commit()  # Confirmați modificările în baza de date
        except mysql.connector.Error as error:
            print(f"Error inserting data into database: {error}")

        # Returnați rezultatul către o altă pagină .php
        return redirect(url_for('rezultat', prediction=prediction))

    # Încărcați formularul inițial .php
    return render_template('predictie_user.php')


@app.route('/login', methods=['POST'])
def login():
    # Obțineți ID-ul utilizatorului din formularul de autentificare
    user_id = request.form['user_id']

    # Setati ID-ul utilizatorului în sesiune
    session['user_id'] = user_id

    # Redirecționare către formularul de predicție .php
    return redirect(url_for('predictie_user'))


if __name__ == '__main__':
    app.run(debug=True)
