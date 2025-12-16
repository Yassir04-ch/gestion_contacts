<?php
session_start();
include('utils/header.php');

$name = $_SESSION['user_name'];
$date = $_SESSION['date_inscription'];
?>

<div class="container my-5 ">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h2 class="card-title">Profile</h2>
                    <h3 class="card-title">Hello <?php echo $name ?></h3>
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" class="rounded-circle img-fluid w-25 mb-3">
                    <p class="card-text"><strong>name : </strong><?php echo $name ?></p>
                    <p class="card-text"><strong>registration date : </strong><?php echo $date ?></p>

                    <div class="d-flex justify-content-center my-3">
                        <a class="btn btn-primary" href="contact.php">Contacts</a>
                    </div>
                     <div class="d-flex justify-content-center my-3">
                        <a class="btn btn-danger" href="log_out.php">LOG OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('utils/footer.php'); ?>