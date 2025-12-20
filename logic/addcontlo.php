<?php
require('../utils/header1.php');
require('../utils/db.php');
require('../utils/validation.php');
session_start();

if(!isset($_POST['submit'])) {
    header("Location:../addcont.php");
    exit();
    }

            $fnamecon =     santString($_POST['fnamecon']);
            $lnamecon =     santString($_POST['lnamecon']);
            $email =    santString($_POST['email']);
            $valemail = santsemail($email);
            $phone =    santString($_POST['phone']);
            $address =    santString($_POST['address']);
            $user_id = $_SESSION['id'];
      if(!empty($fnamecon) && !empty($lnamecon) &&  !empty($email) && !empty($phone) && !empty($address))
            {
                if(minInput($fnamecon,3) && minInput($fnamecon,3))
                {
                        $sql = "INSERT INTO `contact` (`firstname`,`lastname`,`email`,`phone`,`address`,`user_id`)
                        VALUES (?,?,?,?,?,?) ";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$fnamecon,$lnamecon,$valemail,$phone,$address,$user_id]);
                        if($stmt->rowCount() > 0)
                        {
                            header("refresh:2;url=../contact.php");
                            $success = "Added Successfully";
                        }
                     else {
                    $error = "FirstName And LastName Must Be Grater Than 3 Chars and validate email";
                    header("refresh:2;url=../addcont.php");

                }
                }
                else 
                {
                    $error = "Name Must Be Grater Than 3 Chars and validate email";
                    header("refresh:2;url=../addcont.php");

                }
            }
            else 
            {
                $error =  "Please Fill All  Fields !";
                header("refresh:2;url=../addcont.php");

            }

     if ($error) {
      echo "<h5 class='alert alert-danger text-center'>$error</h5>";
     }
     if($success){  
        echo "<h5 class='alert alert-success text-center'>$success</h5>";
    }
require('../utils/footer.php'); 
?>
