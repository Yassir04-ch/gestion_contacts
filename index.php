<?php include('utils/header.php')?>

<?php
$sql = "SELECT * FROM `users` WHERE id = 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

   <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Gestion des contacts</h1>
   <div class="d-flex justify-content-between w-100">
      <a class="btn btn-primary  py-2" href="connexion.php">connexion</a>
      <a class="btn btn-primary  py-2" href="inscription.php">inscription</a>
    </div>

    














<?php include('utils/footer.php')?>