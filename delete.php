<?php
include('utils/db.php');
include('utils/header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `contact` WHERE `id` = '$id'";
    $resulte = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resulte);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `contact` WHERE `id` = '$id'";
    $resulte = mysqli_query($conn, $sql);
}
?>

<h1 class="text-center col-12 bg-info py-3 text-white my-2">DELETE USER</h1>
<h5 class='alert alert-success text-center'><?php echo " Delete " . $row['name'];
    header('refresh:3;url=contact.php');?></h5>
<?php include('utils/footer.php'); ?>