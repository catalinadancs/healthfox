<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or show an access denied message
    header("Location: login.php");
    exit();
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
                    <li class="nav-item"><a class="btn btn-danger btn-primary" role="button" href="logout.php">Log out</a></li>
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
        <a href="despre_diabet1.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 1</a>
      </li>
      <li>
        <a href="despre_diabet2.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 2</a>
      </li>
      <li>
        <a href="predictie_user.php" class="nav-link active" aria-current="page">Probabilitatea de a face diabet</a>
      </li>
      <li>
        <a href="specialist.php" class="nav-link link-body-emphasis">Discuta cu un specialist</a>
      </li>

    </ul>
  </div>

    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <div class="card">
                    <span>
                    <h1> <a href="predictie_user.php" style="text-decoration: none;">🔙</a></h1>
                    <h1 class="card-title text-center">Rezultate</h1>
                    </span>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Valori:</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Gen:</td>
                    <td><?php echo $_GET["gender"]; ?></td>
                </tr>
                <tr>
                    <td>Varsta:</td>
                    <td><?php echo $_GET["age"]; ?></td>
                </tr>
                <tr>
                    <td>Hipertensiune arteriala:</td>
                    <td><?php echo $_GET["hypertension"]; ?></td>
                </tr>
                <tr>
                    <td>Probleme cardiace:</td>
                    <td><?php echo $_GET["heart_disease"]; ?></td>
                </tr>
                <tr>
                    <td>Istoricul fumatului:</td>
                    <td><?php echo $_GET["smoking_history"]; ?></td>
                </tr>
                <tr>
                    <td>IMC:</td>
                    <td><?php echo $_GET["bmi"]; ?></td>
                </tr>
                <tr>
                    <td>Nivelul HbA1c:</td>
                    <td><?php echo $_GET["hba1c_level"]; ?></td>
                </tr>
                <tr>
                    <td>Glicemie:</td>
                    <td><?php echo $_GET["blood_glucose_level"]; ?></td>
                </tr>
                <tr>
                <td>Predictie:</td>
                <td>
                <?php
                    $blood_glucose_level = intval($_GET["blood_glucose_level"]);
                    $prediction = $blood_glucose_level > 215 ? 'Da' : 'Nu';
                    echo "<pre>$prediction</pre>";
                ?></td>
            </tr>
                </tbody>
            </table>
        </div>
    </div>
            </div></div></div></main>
</body>
</html>
