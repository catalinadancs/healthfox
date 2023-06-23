<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthfox";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_createdb = "CREATE DATABASE IF NOT EXISTS $dbname";
$sql_createtb = "CREATE TABLE IF NOT EXISTS $dbname.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nume VARCHAR(100),
    prenume VARCHAR(200),
    username VARCHAR(200),
    email VARCHAR(200),
    parola VARCHAR(200),
    utype VARCHAR(200),
    priority VARCHAR(15)
)";

$conn->query($sql_createdb);
$conn->select_db($dbname);
$conn->query($sql_createtb);

if ($conn->error) {
    echo "Error creating table: " . $conn->error;
    exit();
}

return $conn;
?>
