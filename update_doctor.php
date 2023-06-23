<?php
require('mysql_connect.php');
$id = $_GET['id'];
$nume = $prenume = $specializare = $clinica = $locatie = $telefon = "";
$sql_select = "SELECT * FROM doctori WHERE id = ?";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nume = isset($_POST["nume"]) ? htmlspecialchars($_POST["nume"]) : "";
    $prenume = isset($_POST["prenume"]) ? htmlspecialchars($_POST["prenume"]) : "";
    $specializare = isset($_POST["specializare"]) ? htmlspecialchars($_POST["specializare"]) : "";
    $clinica = isset($_POST["clinica"]) ? htmlspecialchars($_POST["clinica"]) : "";
    $locatie = isset($_POST["locatie"]) ? htmlspecialchars($_POST["locatie"]) : "";
    $telefon = isset($_POST["telefon"]) ? htmlspecialchars($_POST["telefon"]) : "";

    if (!empty($nume) && !empty($prenume) && !empty($specializare) && !empty($clinica) && !empty($locatie) && !empty($telefon)) {
        $sql_update = "UPDATE doctori SET nume=?, prenume=?, specializare=?, clinica=?, locatie=?, telefon=? WHERE id = ?";

        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssssssi", $nume, $prenume, $specializare, $clinica, $locatie, $telefon, $id);

        if ($stmt->execute()) {
            echo '<div class="alert alert-success" role="alert">
                    Record updated successfully 😊
                  </div>';
                  header("Location: dashboard_doctor.php");
            exit(); // Make sure to include this exit() call after the redirect
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    An error occurred while updating 😱 <br>
                    Error: '.$sql_update.' <br> '.$stmt->error.'
                  </div>';
        }

        $stmt->close();
    }
}

$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("i", $id);
$stmt_select->execute();
$doctori = $stmt_select->get_result();
$stmt_select->close();
$conn->close();
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
            <a class="navbar-brand fw-bold" href="admin_dashboard.php">HealthFox</a>
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
    <div class='container'>
        <div class='row pt-3'>
            <div class='col'>
                <div class='card'>
                    <span>
                        <h1> <a href="dashboard_doctor.php" style="text-decoration: none;">🔙</a></h1>
                        <h1 class='card-title text-center'>Editeaza doctorul</h5>
                    </span>
                    <div class='card-body'>
                        <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']."?id=$id"); ?>' method='post'>
                            <?php
                            if ($doctori->num_rows > 0) {
                                while ($row = $doctori->fetch_assoc()) {
                                    $id = $row["id"];
                                    $nume = $row["nume"];
                                    $prenume = $row["prenume"];
                                    $specializare = $row["specializare"];
                                    $clinica = $row["clinica"];
                                    $locatie = $row["locatie"];
                                    $telefon = $row["telefon"];

                                    echo "
                                        <div class='mb-3'>
                                        <label for='nume' class='form-label'>Nume</label>
                                        <input type='text' class='form-control' id='nume' name='nume' placeholder='Nume' value='$nume' required />
                                        </div>
                                        <div class='mb-3'>
                                        <label for='prenume' class='form-label'>Prenume</label>
                                        <input type='text' class='form-control' id='prenume' name='prenume' placeholder='Prenume' value='$prenume' required />
                                        </div>
                                        <div class='mb-3'>
                                        <label for='specializare' class='form-label'>Specializare</label>
                                        <input type='text' class='form-control' id='specializare' name='specializare' placeholder='Specializare' value='$specializare' required />
                                        </div>
                                        <div class='mb-3'>
                                        <label for='clinica' class='form-label'>Clinica</label>
                                        <input type='text' class='form-control' id='clinica' name='clinica' placeholder='Clinica' value='$clinica' required />
                                        </div>
                                        <div class='mb-3'>
                                        <label for='locatie' class='form-label'>Locatie</label>
                                        <input type='text' class='form-control' id='locatie' name='locatie' placeholder='Locatie' value='$locatie' required />
                                        </div>
                                        <div class='mb-3'>
                                        <label for='telefon' class='form-label'>Telefon</label>
                                        <input type='text' class='form-control' id='telefon' name='telefon' placeholder='Telefon' value='$telefon' required />
                                        </div>
                                        ";
                                }
                            }
                            ?>
                            <div class='d-grid gap-2 pt-4'>
                                <button class='btn btn-success' type='submit'>Trimite</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>

</html>
