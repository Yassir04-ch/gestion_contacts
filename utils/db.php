<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connect_flow";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("error on base donne" . $e->getMessage());
}
