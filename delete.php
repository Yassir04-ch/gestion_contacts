<?php
include('utils/db.php');
include('utils/header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `contact` WHERE `id` = :id";
     $stmt =$conn->prepare($sql);
     $stmt->execute([':id' => $id]);
     if($stmt->rowCount()>0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     }

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `contact` WHERE `id` = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id'=>$id]);
}
?>

<h1 class="text-center col-12 bg-info py-3 text-white my-2">DELETE USER</h1>
<h3 class='alert alert-success text-center'><?php echo " Delete " . $row['name'];
    header('refresh:3;url=contact.php');?></h3>
<?php include('utils/footer.php'); ?>