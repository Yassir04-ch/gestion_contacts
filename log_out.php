<?php 
session_start();
include('utils/header1.php');
echo"<h1 class='text-center col-12 bg-info py-3 text-white my-2'>log out succec</h1>";
session_destroy();
header('refresh:1;url=index.php');
include('utils/footer.php');
?>
