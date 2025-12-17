<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connect_flow";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
$conn = new PDO($dsn,$username,$password);
 
