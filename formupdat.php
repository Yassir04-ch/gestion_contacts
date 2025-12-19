<?php
include('utils/db.php');
include('utils/header.php');
include('utils/validation.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM `contact` WHERE `id` = :id";
     $stmt =$conn->prepare($sql);
     $stmt->execute([':id' => $id]);
     if($stmt->rowCount()>0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     }
     else{
        header("location:contact.php");
     }
?>  

 <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About contact</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" id="form_con" method="POST" action="logic/updat.php">
            <div class="form-group">
                <label for="fnamecon">Full Name</label>
                <input type="text" name="fnamecon" class="form-control" id="namecon" value=<?php echo $row['firstname']?> >
                <input type="hidden" value ="<?php echo $id ?>"  name="id">
            </div>
            <div class="form-group">
                <label for="lnamecon">Full Name</label>
                <input type="text" name="lnamecon" class="form-control" id="namecon" value=<?php echo $row['lastname']?> >
                <input type="hidden" value ="<?php echo $id ?>"  name="id">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email"  value=<?php echo $row['email'] ?>>
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="phone" name="phone" class="form-control" id="phone"  value=<?php echo $row['phone']  ?>>
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="address" name="address" class="form-control" id="address"  value=<?php echo $row['address']  ?>>
            </div>
            <button type="submit" class="btn btn-primary btn-translate" name="submit">Submit</button>
            <a class="btn btn-primary" href="contact.php">GO Back</a>
        
        </form>
    </div>
   
<?php  include('utils/footer.php'); ?>

