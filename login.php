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
    $name = validate($_POST['name']);
    $passwordinp = $_POST['password'];
    if (empty($name)) {
      $error = "user name is required";
    }
    else if(empty($passwordinp)){
        $error = "password is required";
    }
    else{
        $sql = "SELECT * FROM users WHERE user_name = :name ";
        $stmt =  $conn->prepare($sql);
        $stmt->execute([':name'=>$name]);
        if($stmt->rowCount() > 0){
            $row =  $stmt->fetch(PDO::FETCH_ASSOC);
            $passwordhash = $row['user_password'];
            if ($row['user_name'] === $name && password_verify($passwordinp,$passwordhash)) {
              
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['date_inscription'] = $row['date_inscription'];
                header("Location:profil.php");
            }
            else{
                  $error = "incorect user name ";
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
                <label for="namecnx">Full Name</label>
                <input type="text" name="name" class="form-control" id="namecnx" >
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