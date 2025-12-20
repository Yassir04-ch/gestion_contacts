<?php
session_start();
include('utils/header.php');

$firstname = $_SESSION['firstname_user'];
$lastname = $_SESSION['lastname_user'];
$date = $_SESSION['date_inscription'];
$email = $_SESSION['email_user'];
?>

<div class="container my-1 ">
    <div class="row justify-content-center ">
        <div class="profil">
            <div class="profil card shadow-sm">
                <div class="profil card-body text-center">
                    <h2 class="card-title">Profile</h2>
                    <h3 >Hello <?php echo $firstname ?></h3>
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" class="rounded-circle img-fluid w-25 mb-3">
                    <p class="card-text"><strong>Name : </strong><?php echo $firstname ." ".$lastname ?></p>
                    <p class="card-text"><strong>registration date : </strong><?php echo $date ?></p>
                    <p class="card-text"><strong>Email : </strong><?php echo $email ?></p>
                    <div class="d-flex justify-content-center my-3">
                        <a class="btn btn-primary" href="contact.php">Contacts</a>
                    </div>
                     <div class="d-flex justify-content-center my-3">
                        <a class="btn btn-danger" href="logic/log_out.php">LOG OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('utils/footer.php'); ?>