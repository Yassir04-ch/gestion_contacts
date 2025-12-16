
<?php
session_start();
include('utils/header.php');
include('utils/validation.php');

if(isset($_POST['submit'])) {
            $namecon =     santString($_POST['namecon']);
            $email =    santString($_POST['email']);
            $valemail = santsemail($email);
            $phone =    santString($_POST['phone']);
            $address =    santString($_POST['address']);
            $user_id = $_SESSION['id'];
      if(requiredInput($namecon) &&  requiredInput($email) && requiredInput($phone) && requiredInput($address))
            {
                if(minInput($namecon,3))
                {
                        $sql = "INSERT INTO `contact` (`name`,`phone`,`email`,`address`,`user_id`)
                        VALUES (?,?,?,?,?) ";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$namecon,$phone,$valemail,$address,$user_id]);
                        if($stmt->rowCount() > 0)
                        {
                            header("refresh:2;url=contact.php");
                            $success = "Added Successfully";
                        }
                     else {
                    $error = "Name Must Be Grater Than 3 Chars and validate email";
                }
                }
                else 
                {
                    $error = "Name Must Be Grater Than 3 Chars and validate email";
                }
            }
            else 
            {
                $error =  "Please Fill All  Fields !";
            }
        }

?>

    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New contact</h1>
   <?php
     if ($error) {
      echo "<h5 class='alert alert-danger text-center'>$error</h5>";
     }
 ?>
    <?php 
    if($success){  
        echo "<h5 class='alert alert-success text-center'>$success</h5>";
    }
    ?>


    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" id="form_con" method="POST" action="addcont.php">
            <div class="form-group">
                <label for="namecon">Full Name</label>
                <input type="text" name="namecon" class="form-control" id="namecon" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="phone" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="address" name="address" class="form-control" id="address">
            </div>
            <button type="submit" class="btn btn-primary btn-translate" name="submit">Submit</button>
            <a class="btn btn-primary" href="contact.php">GO Back</a>

        </form>
    </div>
   
<?php  include('utils/footer.php'); ?>

 