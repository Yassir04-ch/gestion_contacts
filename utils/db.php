<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_contacts";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
$conn = new PDO($dsn,$username,$password);
