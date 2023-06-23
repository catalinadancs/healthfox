<?php
$mysqli = new mysqli('localhost', 'root', '', 'healthfox') or die(mysqli_error($mysqli));
if (isset($_POST["nume"]) && isset($_POST["prenume"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["parola"])) {
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];
    $utype = "user"; // Set the default user type as "user"
    $mysqli->query("INSERT INTO users (nume, prenume, username, email, parola, utype) VALUES ('$nume', '$prenume', '$username', '$email', '$parola', '$utype')") or die($mysqli->error);
    header("Location: login.php?register=success");
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
<?php
if (isset($_GET["register"]) && $_GET["register"] == "success") {
    echo '<script>alert("Done! The user can login now!")</script>';
}
?>

<body>


    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand fw-bold" href="index.php">HealthFox</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid square" src="assets/img/fox7.png" alt="..." /></div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="colm-form">
                        <form action="register.php" method="POST" class="was-validated">
                            <div class="mb-3 mt-3">
                                <label for="nume" class="form-label">Nume</label>
                                <input type="nume" class="form-control" id="nume" placeholder="Nume" name="nume"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="prenume" class="form-label">Prenume</label>
                                <input type="prenume" class="form-control" id="prenume" placeholder="Prenume"
                                    name="prenume" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" class="form-control" id="username" placeholder="Username"
                                    name="username" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="parola" class="form-label">Parola</label>
                                <input type="password" class="form-control" id="parola" placeholder="Parola"
                                    name="parola" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; HealthFox 2023. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
