<?php
session_start();
require("mysql_connect.php");

if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or show an access denied message
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM rezultate WHERE user_id = $user_id";
$rezultate = $conn->query($sql);
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

    <h1> <a href="user.php" style="text-decoration: none;">🔙</a></h1>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gen</th>
                    <th>Varsta</th>
                    <th>Hipertensiune</th>
                    <th>Probleme cardiace</th>
                    <th>Fumator</th>
                    <th>BMI</th>
                    <th>Nivelul hba1c</th>
                    <th>Glicemie</th>
                    <th>Predicitie</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($rezultate->num_rows > 0) {
                    while ($row = $rezultate->fetch_assoc()) {
                        $id = $row["id"];
                        $gender = $row["gender"];
                        $age = $row["age"];
                        $hypertension = $row["hypertension"];
                        $heart_disease = $row["heart_disease"];
                        $smoking_history = $row["smoking_history"];
                        $bmi = $row["bmi"];
                        $hba1c_level = $row["hba1c_level"];
                        $blood_glucose_level = $row["blood_glucose_level"];
                        $prediction = $row["prediction"];

                        echo "
                        <tr>
                            <th scope='row'>$id</th>
                            <td>$gender</td>
                            <td>$age</td>
                            <td>$hypertension</td>
                            <td>$heart_disease</td>
                            <td>$smoking_history</td>
                            <td>$bmi</td>
                            <td>$hba1c_level</td>
                            <td>$blood_glucose_level</td>
                            <td>$prediction</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>Nu există rezultate disponibile.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
