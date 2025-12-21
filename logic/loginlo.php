  <?php 
 require('../utils/db.php');
 include('../utils/validation.php');
 include('../utils/header.php');
 session_start();
if(!isset($_POST['submit'])){
    header("Location:../login.php");
    exit();
 } 

    $emailinp = $_POST['user_email'];
    $passwordinp = $_POST['password'];
    if (empty($emailinp) && empty($passwordinp)) {
      $error = "user name and password is required";
      header("Location:../login.php");  
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

                  header("Location:../profil.php");
             }
            else{
                  $error = "incorect password";
                  header("Refresh:2;url=../login.php");
            }
        }
        else{
               $error = "incorect user name or password";
                header("Refresh:2;url=../login.php");
       }
    } 
?>
<?php if($error){ ?>
            <p class="alert alert-danger text-center"><?php echo $error;?></p>
 <?php } ?>

<?php  include('../utils/footer.php');