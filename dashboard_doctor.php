<?php
    require("mysql_connect.php");
    $sql = "SELECT * FROM doctori";
    $doctori = $conn->query($sql);
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
            <a class="navbar-brand ms-0 fw-bold" href="admin_dashboard.php">HealthFox</a>
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
        <a href="admin_dashboard.php" class="nav-link link-body-emphasis">Home</a>
      </li>
      <li>
        <a href="dashboard_users.php" class="nav-link link-body-emphasis">Users</a>
      </li>
      <li>
        <a href="dashboard_doctor.php" class="nav-link active" aria-current="page">Doctori</a>
      </li>
    </ul>
  </div>

  <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Specializare</th>
                    <th>Clinica</th>
                    <th>Locatie</th>
                    <th>Telefon</th>
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
                                         <td>
                                                <a class='btn btn-secondary' href='update_doctor.php?id=$id'>Edit</a>
                                                <a class='btn btn-danger' href='delete_doctor.php?id=$id'>Delete</a>
                                            </td>
                                     </tr>";
                             }
                         }
                     ?>

            </tbody>
        </table>
        <a class="btn btn-primary float-end m-4 ps-3 pe-3" href="create_doctor.php">Adauga</a>
    </div>


</div>
</main>

</body>

</html>
