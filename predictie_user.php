<?php
// Verificați dacă s-a făcut submit la formular
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obțineți valorile trimise din formular
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $hypertension = $_POST["hypertension"];
    $heart_disease = $_POST["heart_disease"];
    $smoking_history = $_POST["smoking_history"];
    $bmi = $_POST["bmi"];
    $hba1c_level = $_POST["include_hba1c"] ? $_POST["hba1c_level"] : null;
    $blood_glucose_level = $_POST["blood_glucose_level"];

    // Definirea funcției pentru a rula scriptul Python și a obține predicția
    function runPythonScript($input_data) {
        $python_path = 'C:\Users\Cata\AppData\Local\Programs\Python\Python310\python.exe'; // Update with the actual path to python3 executable
        $python_script = __DIR__ . '/predict_diabetes.py';
        $command = $python_path . ' ' . escapeshellarg($python_script) . ' ' . escapeshellarg($input_data);

        // Execute the command and capture the output
        $output = shell_exec($command);

        return $output;
    }

    // Definirea datelor de intrare pentru predicție
    $input_data = array(
        $gender,
        $age,
        $hypertension,
        $heart_disease,
        $smoking_history,
        $bmi,
        $hba1c_level,
        $blood_glucose_level
    );

    // Realizarea predicției folosind funcția Python
    $prediction = runPythonScript(json_encode($input_data));

    // Afișarea rezultatului predicției
    if ($prediction !== false) {
        // Successful execution, redirect to result.php
        header("Location: result.php?gender=$gender&age=$age&hypertension=$hypertension&heart_disease=$heart_disease&smoking_history=$smoking_history&bmi=$bmi&hba1c_level=$hba1c_level&blood_glucose_level=$blood_glucose_level&prediction=".urlencode($prediction));
    } else {
        // Error executing Python script, redirect to an error page
        header("Location: error.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HealthFox</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="user.php">HealthFox</a>
            </button>
            <div>
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="btn btn-danger" role="button" href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="d-flex">
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="user.php" class="nav-link link-body-emphasis">Home</a>
      </li>
      <li>
        <a href="despre_diabet.php" class="nav-link link-body-emphasis">Despre diabet</a>
      </li>
      <li>
        <a href="predictie_user.php" class="nav-link active" aria-current="page">Probabilitatea de a face diabet</a>
      </li>
      <li>
        <a href="specialist.php" class="nav-link link-body-emphasis">Discuta cu un specialist</a>
      </li>

    </ul>
  </div>

    <div class="bg-light">


            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-5">
                        <div class="colm-form">
                            <form action="predictie_user.php" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="gender" class="form-label">Gender:</label>
                                <select name="gender">
                                    <option value="1">Female</option>
                                    <option value="0">Male</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age:</label>
                                <input type="number" name="age" required><br>
                            </div>
                            <div class="mb-3">
                                <label for="hypertension" class="form-label">Hypertension:</label>
                                <select name="hypertension">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="heart_disease" class="form-label">Heart Disease:</label>
                                <select name="heart_disease">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="smoking_history" class="form-label">Smoking History:</label>
                                <select name="smoking_history">
                                    <option value="0">Never</option>
                                    <option value="1">No Info</option>
                                    <option value="2">Current</option>
                                    <option value="3">Ever</option>
                                    <option value="4">Not Current</option>
                                    <option value="5">Former</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="bmi" class="form-label">BMI:</label>
                                <input type="number" name="bmi" required><br>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" id="include_hba1c" name="include_hba1c" value="1">
                                <label for="include_hba1c">Include HbA1c Level:</label><br>

                                <div id="hba1c_container" style="display: none;">
                                    <label>HbA1c Level:</label>
                                    <input type="number" name="hba1c_level"><br>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Blood Glucose Level:</label>
                                <input type="number" name="blood_glucose_level" required><br>
                            </div>
                            <script>
                                // Asculta evenimentul de bifare/debifare a căsuței "Include HbA1c Level"
                                document.getElementById("include_hba1c").addEventListener("change", function() {
                                    var hba1cContainer = document.getElementById("hba1c_container");
                                    // Dacă căsuța este bifată, afișează containerul pentru introducerea valorii HbA1c Level
                                    if (this.checked) {
                                        hba1cContainer.style.display = "block";
                                    } else {
                                        hba1cContainer.style.display = "none";
                                    }
                                });
                            </script>

                            <input type="submit" type="submit" class="btn btn-primary" value="Predict">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
