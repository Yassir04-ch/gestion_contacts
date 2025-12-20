<?php 
require('../utils/header1.php');
require('../utils/validation.php');
require('../utils/db.php');

if(!isset($_POST['submit'])) {
    header("Location:../inscription.php");
    exit();
 }

            $fname =     santString($_POST['fname']);
            $lname =     santString($_POST['lname']);
            $password =    santString($_POST['password']);
            $email_user = santsemail($_POST['email_user']);
            
            $check_password =   santString($_POST['chek_password']);
      if(!empty($fname) && !empty($lname) &&  !empty($password) &&  !empty($check_password) && !empty($email_user))
            {
                if(minInput($fname,3)  && minInput($lname,3) && minInput($password,6) && $password === $check_password)
                {
                       $hash_password = password_hash($password,PASSWORD_DEFAULT);
                        $sql = "INSERT INTO `users` (`firstname_user`,`lastname_user`,`email_user`,`password_user`)
                        VALUES (?,?,?,?)  ";
                       $stmt = $conn->prepare($sql);
                       $stmt->execute([$fname,$lname,$email_user,$hash_password]);
                        if($stmt->rowCount() > 0)
                        {     
                            $success = "Your account has been registered";
                            header("refresh:2;url=../login.php");
                        }
                    

                }
                else 
                {
                    $error = "Name Must Be Grater Than 3 Chars / Password like Yassir123@";
                    header("refresh:2;url=../inscription.php");
                      
                }
            }
            else 
            {
                $error =  "Please Fill All  Fields !";
                header("refresh:2;url=../inscription.php");
            }

 if($error){ 
          echo  "<p class='alert alert-danger text-center'><?php echo $error;?></p>";
  } 
 else if($success){ 
         echo  "<p class='alert alert-success text-center'><?php echo $success;?></p>";
 } 

 require('../utils/footer.php'); ?>