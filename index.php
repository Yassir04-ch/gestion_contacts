  <?php 
 include('utils/db.php');
 include('utils/validation.php');
 session_start();
 if(isset($_POST['submit'])){
    $name = validate($_POST['name']);
    $password = $_POST['password'];
    if (empty($name)) {
      $error = "user name is required";
    }
    else if(empty($password)){
        $error = "password is required";
    }
    else{
        $sql = "SELECT * FROM users WHERE user_name = '$name'";
        $result =  mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name ) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['date_inscription'] = $row['date_inscription'];
                header("location:home.php");
                
            }else{
                  $error = "incorect user name or password";
            }
        }
        else{
               $error = "incorect user name or password";
       }
    }
   
 } 
?>
<?php include('utils/header1.php');?>
 
 <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="index.php">
         <h2>LOGIN</h2>
         <?php if($error){ ?>
            <p class="alert alert-danger text-center"><?php echo $error;?></p>
            <?php } ?>

            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" id="namecnx" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">password</label>
                <input type="password" name="password" class="form-control" id="passwordcnx" >
            </div>
            <div class="form-group">
              <a class="new_user" href="inscription.php ">new user</a>    
            </div>
            <button type="submit" class="btn btn-primary btn-translate" name="submit">Submit</button>
        </form>
    </div>
    <script src="utils/footer.php"></script>
 </body>
 </html>