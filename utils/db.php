<?php 
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "gestion_contacts";

     $conn = mysqli_connect($servername,$username,$password,$dbname);
     
   if (!$conn) {
    echo "hello";
   }
   
   