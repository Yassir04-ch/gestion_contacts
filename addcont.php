
<?php
session_start();
include('utils/header.php');
include('utils/validation.php');

if(isset($_POST['submit'])) {
            $namecon =     santString($_POST['namecon']);
            $email =    santString($_POST['email']);
            $phone =    santString($_POST['phone']);
            $address =    santString($_POST['address']);
      if(requiredInput($namecon) &&  requiredInput($email) && requiredInput($phone) && requiredInput($address))
            {
                if(minInput($namecon,3))
                {
                        $sql = "INSERT INTO `contact` (`name`,`phone`,`email`,`address`)
                        VALUES ('$name','$email','$phone','$address') ";

                        $result = mysqli_query($conn,$sql);

                        if($result)
                        {
                            $success = "Added Successfully ";
                            header("refresh:2;url=contacts.php");
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
                <input type="text" name="name" class="form-control" id="namecon" >
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
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
   
<?php  include('utils/footer.php'); ?>

 