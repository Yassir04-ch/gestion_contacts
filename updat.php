<?php
include('utils/db.php');
include('utils/validation.php');
include('utils/header.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $name = santString($_POST['namecon']);
    $email = santsemail($_POST['email']);
    $address = santString($_POST['address']);
    if (requiredInput($name) &&  requiredInput($email) && requiredInput($phone) && requiredInput($address)) {
        $sql = "UPDATE `contact` SET `name` = '$name', `phone`='$phone',`email`='$email',`address`='$address'  WHERE `id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        if ($stmt->rowCount() > 0) {
            header("refresh:2;url=contact.php");
            $success = "Update Successfully";
        }
        else{
            $error = "error in update";
        }
    } 
    else{
            $error = "error in update";
        }
}
?>
 <?php if($error): ?>
          <h5 class='alert alert-danger text-center'><?php echo $error; ?></h5>
         <a href="javascript:history.back()" class="btn btn-primary">GO BACK </a>

   <?php endif; ?>


    <?php if($success): ?>
          <h5 class='alert alert-success text-center'><?php echo $success; ?></h5>
   <?php endif; ?>
   
<?php  include('utils/footer.php'); ?>

 
