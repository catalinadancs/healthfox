import pandas as pd
from sklearn.ensemble import RandomForestClassifier
import sys
import json
import joblib

# Load the dataset
dataset = pd.read_csv('diabet.csv')

# Convert non-numeric values to numeric
gender_conversion_dict = {'Male': 0, 'Female': 1}
dataset['gender_numeric'] = dataset['gender'].map(gender_conversion_dict)
conversion_dict = {'never': 0, 'No Info': 1, 'current': 2,
                   'ever': 3, 'not current': 4, 'former': 5}
dataset['smoking_history_numeric'] = dataset['smoking_history'].map(
    conversion_dict)

# Select desired columns
new_dataset = dataset[['gender_numeric', 'age', 'hypertension', 'heart_disease',
                       'smoking_history_numeric', 'bmi', 'HbA1c_level', 'blood_glucose_level', 'diabetes']]

# Separate features (X) and target variable (y)
X = new_dataset.drop(['diabetes'], axis=1)
y = new_dataset['diabetes']

# Train the Random Forest Classifier
rfc = RandomForestClassifier(random_state=0)
rfc.fit(X, y)

# Save the trained model to a file
joblib.dump(rfc, 'model.joblib')

# Read input data from command line argument (passed from PHP)
input_data = json.loads(sys.argv[1])

# Create a DataFrame from the input data
input_df = pd.DataFrame([input_data], columns=X.columns)

# Load the trained model
loaded_model = joblib.load('model.joblib')

# Make predictions on the input data
predictions = loaded_model.predict(input_df)

# Return the predictions as output (to be captured by PHP)
print(predictions[0])
