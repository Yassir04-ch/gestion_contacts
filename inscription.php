<?php
include('utils/validation.php');
include('utils/db.php');
include('utils/header1.php');
if(isset($_POST['submit'])) {
            $fname =     santString($_POST['fname']);
            $lname =     santString($_POST['lname']);
            $password =    santString($_POST['password']);
            $email_user = santsemail($_POST['email_user']);
            
            $check_password =   santString($_POST['chek_password']);
      if(requiredInput($fname) && requiredInput($lname) &&  requiredInput($password) &&  requiredInput($check_password) && requiredInput($email_user))
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
                            header("refresh:2;url=login.php");
                        }
                    

                }
                else 
                {
                    $error = "Name Must Be Grater Than 3 Chars / Password like Yassir123@";
                }
            }
            else 
            {
                $error =  "Please Fill All  Fields !";
            }
        }

?>
 
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">New User</h1>
   <?php
     if ($error) {
      echo "<h5 class='alert alert-danger text-center'>$error</h5>";
     }
 ?> <?php
     if ($success) {
      echo "<h5 class='alert alert-success text-center'>$success</h5>";
     }
 ?>

    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" id="form_ins" method="POST" action="inscription.php">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname" >
            </div>
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" >
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email_user" class="form-control" id="user_email" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" >
            </div>
            <div class="form-group">
                <label for="check_password">Password</label>
                <input type="password" name="chek_password" class="form-control" id="check_password">
            </div>
            <div class="form-group">
              <a class="new_user" href="login.php ">login</a>    
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
<script src="utils/script.js"></script>
</body>