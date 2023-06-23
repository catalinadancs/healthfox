<?php
    session_start();
    require("mysql_connect.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("Location: dashboard_users.php");
            exit();
        } else {
            echo "Eroare la stergerea user-ului " . $conn->error;
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
            <a class="navbar-brand fw-bold" href="admin_dashboard.php">HealthFox</a>
            </button>
            <div>
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="btn btn-danger btn-primary" role="button" href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <div class="card">
                    <h1 class="card-title text-center">Esti sigur ca vrei sa stergi?</h5>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post">
                                <div class="d-grid gap-2 pt-4">
                                    <button class="btn btn-danger" type="submit">Da</button>
                                    <a href="dashboard_users.php" class="btn btn-secondary">Nu</a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
