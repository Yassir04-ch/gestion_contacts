  <?php 
 include('utils/db.php');
 include('utils/validation.php');
 session_start();
 if (isset($_SESSION['id'])) {
    header("location:profil.php");
    exit;
 }
 else{
if(isset($_POST['submit'])){
    $emailinp = $_POST['user_email'];
    $passwordinp = $_POST['password'];
    if (empty($emailinp)) {
      $error = "user name is required";
    }
    else if(empty($passwordinp)){
        $error = "password is required";
    }
    else{
        $sql = "SELECT * FROM users WHERE email_user = :email";
        $stmt =  $conn->prepare($sql);
        $stmt->execute([':email'=>$emailinp]);
        if($stmt->rowCount() > 0){
            $row =  $stmt->fetch(PDO::FETCH_ASSOC);
            $passwordhash = $row['password_user'];
            if ($row['email_user'] === $emailinp && password_verify($passwordinp,$passwordhash)) {
                
                $_SESSION['firstname_user'] = $row['firstname_user'];
                $_SESSION['lastname_user'] = $row['lastname_user'];
                $_SESSION['email_user'] = $row['email_user'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['date_inscription'] = $row['date_inscription'];
                header("Location:profil.php");
            }
            else{
                  $error = "incorect user email ";
            }
        }
        else{
               $error = "incorect user name or password";
       }
    }
   
 } 
}
?>
<?php include('utils/header1.php');?>
 <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="login.php">
         <h2>LOGIN</h2>
         <?php if($error){ ?>
            <p class="alert alert-danger text-center"><?php echo $error;?></p>
            <?php } ?>

            <div class="form-group">
                <label for="namecnx">Email</label>
                <input type="email" name="user_email" class="form-control" id="user_email" >
            </div>
            <div class="form-group">
                <label for="passwordcnx">password</label>
                <input type="password" name="password" class="form-control" id="passwordcnx" >
            </div>
            <div class="form-group">
              <a class="new_user" href="inscription.php ">new user</a>    
            </div>
            <button type="submit" class="btn btn-primary btn-translate" name="submit">Submit</button>
        </form>
    </div>
    <script src="utils/script.js"></script>
 </body>
 </html>