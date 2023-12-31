<?php
    require("mysql_connect.php");
    $sql = "SELECT * FROM doctori";
    $doctori = $conn->query($sql);
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
        <a href="despre_diabet1.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 1</a>
      </li>
      <li>
        <a href="despre_diabet2.php" class="nav-link link-body-emphasis">Diabet zaharat de tip 2</a>
      </li>
      <li>
        <a href="predictie_user.php" class="nav-link link-body-emphasis">Probabilitatea de a face diabet</a>
      </li>
      <li>
        <a href="specialist.php" class="nav-link active" aria-current="page">Discuta cu un specialist</a>
      </li>

    </ul>
  </div>

  <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nume</th>
                    <th>prenume</th>
                    <th>specializare</th>
                    <th>clinica</th>
                    <th>locatie</th>
                    <th>telefon</th>
                </tr>
            </thead>
            <tbody>
                        <?php
                        if ($doctori->num_rows > 0) {
                            while($row = $doctori->fetch_assoc()) {
                            $id = $row["id"];
                            $nume = $row["nume"];
                            $prenume = $row["prenume"];
                            $specializare = $row["specializare"];
                            $clinica = $row["clinica"];
                            $locatie = $row["locatie"];
                            $telefon = $row["telefon"];
                            echo "
                            <tr>
                            <th scope='row'>$id</th>
                            <td>$nume</td>
                            <td>$prenume</td>
                            <td>$specializare</td>
                            <td>$clinica</td>
                            <td>$locatie</td>
                            <td>$telefon</td>
                        </tr>";
                            }
                        }
                        ?>
            </tbody>
        </table>
  </div>
</div>
    </main>

</body>

</html>
