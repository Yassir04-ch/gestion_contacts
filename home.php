<?php 
session_start();
include('utils/header.php');
$user_name = $_SESSION['user_name'];
?>


<h1 class="text-center col-12 py-3 text-white my-2">WELCOME <?php echo $user_name ?></h1>
<div class="d-flex justify-content-center my-3">
    <a class="btn btn-primary" href="profil.php">PROFIL</a>
</div>
<div class="d-flex justify-content-center my-3">
    <a class="btn btn-primary" href="contact.php">Contacts</a>
</div>

<?php include('utils/footer.php'); ?>