import seaborn as sns
from sklearn.metrics import classification_report
from sklearn.metrics import confusion_matrix
from sklearn.metrics import accuracy_score
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
import numpy as np  # linear algebra
import pandas as pd  # data processing, CSV file I/O (e.g. pd.read_csv)
import matplotlib.pyplot as plt  # data visualization
import seaborn as sns  # statistical data visualization
import pandas as pd
import joblib

# Încărcare fișier CSV
dataset = pd.read_csv('diabet.csv')

dataset.head(999999)

# Convertirea valorilor non-numerice în valori numerice
gender_conversion_dict = {'Male': 0, 'Female': 1}
dataset['gender_numeric'] = dataset['gender'].map(gender_conversion_dict)
conversion_dict = {'never': 0, 'No Info': 1, 'current': 2,
                   'ever': 3, 'not current': 4, 'former': 5}
dataset['smoking_history_numeric'] = dataset['smoking_history'].map(
    conversion_dict)

# Selectarea coloanelor dorite și salvarea într-un nou set de date
new_dataset = dataset[['gender_numeric', 'age', 'hypertension', 'heart_disease',
                       'smoking_history_numeric', 'bmi', 'HbA1c_level', 'blood_glucose_level', 'diabetes']]

new_dataset.info()

new_dataset2 = new_dataset.dropna(subset=['gender_numeric'])
new_dataset2.info()

X = new_dataset2.drop(['diabetes'], axis=1)
y = new_dataset2['diabetes']

# split data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(
    X, y, test_size=0.33, random_state=42)

# import Random Forest classifier
rfc = RandomForestClassifier(random_state=0)

# fit the model
rfc.fit(X_train, y_train)

# Predict the Test set results
y_pred = rfc.predict(X_test)

# Check accuracy score
print('Model accuracy score with 10 decision-trees : {0:0.4f}'. format(
    accuracy_score(y_test, y_pred)))

# instantiate the classifier with n_estimators = 100
rfc_100 = RandomForestClassifier(n_estimators=100, random_state=0)

# fit the model to the training set
rfc_100.fit(X_train, y_train)

# Predict on the test set results
y_pred_100 = rfc_100.predict(X_test)

# Check accuracy score
print('Model accuracy score with 100 decision-trees : {0:0.4f}'. format(
    accuracy_score(y_test, y_pred_100)))

# create the classifier with n_estimators = 100
clf = RandomForestClassifier(n_estimators=100, random_state=0)

# fit the model to the training set
clf.fit(X_train, y_train)

# view the feature scores
feature_scores = pd.Series(clf.feature_importances_,
                           index=X_train.columns).sort_values(ascending=False)

feature_scores


# Salvarea modelului antrenat într-un fișier folosind joblib
joblib.dump(rfc, 'model.joblib')

# Încărcarea modelului antrenat din fișier folosind joblib
loaded_model = joblib.load('model.joblib')

# Exemplu de predicție pe setul de testare
loaded_model.predict(X_test)
