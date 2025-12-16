<?php
include('utils/validation.php');
include('utils/db.php');
include('utils/header1.php');
if(isset($_POST['submit'])) {
            $name =     santString($_POST['name']);
            $password =    santString($_POST['password']);
            
            $check_password =   santString($_POST['chek_password']);
      if(requiredInput($name) &&  requiredInput($password) &&  requiredInput($check_password))
            {
                if(minInput($name,3) && minInput($password,6) && $password === $check_password)
                {
                       $hash_password = password_hash($password,PASSWORD_DEFAULT);
                        $sql = "INSERT INTO `users` (`user_name`,`user_password`)
                        VALUES (?,?)  ";
                       $stmt = $conn->prepare($sql);
                       $stmt->execute([$name,$hash_password]);
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
 
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
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
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" >
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