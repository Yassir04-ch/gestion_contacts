<?php
require('../utils/db.php');
include('../utils/validation.php');
include('../utils/header.php');

if (!isset($_POST['submit'])) {
    header('Location:../formupdat.php');
    exit();
}
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $fname = santString($_POST['fnamecon']);
    $lname = santString($_POST['lnamecon']);
    $email = santsemail($_POST['email']);
    $address = santString($_POST['address']);
    if (!empty($fname) && !empty($fname) &&  !empty($email) && !empty($phone) && !empty($address)) {
        $sql = "UPDATE `contact` SET `firstname` = '$fname',`lastname` = '$lname', `phone`='$phone',`email`='$email',`address`='$address'  WHERE `id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        if ($stmt->rowCount() > 0) {
            header("refresh:2;url=../contact.php");
            $success = "Update Successfully";
        }
        else{
            $error = "error in update";
            header("refresh:2;url=../formupdat.php");

        }
    } 
    else{
            $error = "error in update";
            header("refresh:2;url=../formupdat.php");
        }
?>
 <?php if($error): ?>
          <h5 class='alert alert-danger text-center'><?php echo $error; ?></h5>
         <a href="javascript:history.back()" class="btn btn-primary">GO BACK </a>

   <?php endif; ?>


    <?php if($success): ?>
          <h5 class='alert alert-success text-center'><?php echo $success; ?></h5>
   <?php endif; ?>
   
<?php  include('../utils/footer.php'); ?>

 
