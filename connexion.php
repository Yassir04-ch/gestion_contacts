 <?php 
 session_start();
 include('utils/db.php');
 include('utils/validation.php');

 if(isset($_POST['submit'])){
    $name = validate($_POST['name']);
    $password = $_POST['password'];
    if (empty($name)) {
      $error = "user name is required";
     exit();
    }
    else if(empty($password)){
        $error = "password is required";
         exit();  
    }
    else{
        $sql = "SELECT * FROM users WHERE user_name = '$name'";
        $result =  mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name   ) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_password'] = $row['user_password'];
                $_SESSION['id'] = $row['id'];
                header("Refrech:2;profil.php");
                exit();
            }else{
                  $error = "incorect user name or password";
                exit();
            }
        }
        else{
               $error = "incorect user name or password";
                exit();
       }
    }
   
 } 
  else{
        header("location:index.php");
        exit();
    }
?>