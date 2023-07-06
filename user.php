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
        <a href="user.php" class="nav-link active" aria-current="page">Home</a>
      </li>
      <li>
        <a href="despre_diabet1.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 1</a>
      </li>
      <li>
        <a href="despre_diabet2.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 2</a>
      </li>
      <li>
        <a href="predictie_user.php" class="nav-link link-body-emphasis">Probabilitatea de a face diabet</a>
      </li>
      <li>
        <a href="specialist.php" class="nav-link link-body-emphasis">Discuta cu un specialist</a>
      </li>

    </ul>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Diabet zaharat de tip 1</h5>
        <p class="card-text">Tot ce trebuie sa stii despre diabetul zaharat de tip 1.</p>
        <a href="despre_diabet1.php" class="btn btn-primary">Afla mai multe</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Diabet zaharat de tip 2</h5>
        <p class="card-text">Tot ce trebuie sa stii despre diabetul zaharat de tip 2.</p>
        <a href="despre_diabet2.php" class="btn btn-primary">Afla mai multe</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Probabilitatea de a face diabet</h5>

        <a href="predictie_user.php" class="btn btn-primary">Verifica probabilitatea</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Discuta cu un specialist</h5>

        <a href="specialist.php" class="btn btn-primary">Programeaza o consultatie</a>
      </div>
    </div>
  </div>


</div>

    </main>
</body>

</html>
