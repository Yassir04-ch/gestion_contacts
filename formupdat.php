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

<div class="container mt-4">

    <h3 class="text-center bg-primary text-white py-3 rounded mb-4">✏️ Edit Contact Information </h3>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="logic/updat.php">

                        <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="fnamecon" class="form-control" value="<?= htmlspecialchars($row['firstname']); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lnamecon"  class="form-control"  value="<?= htmlspecialchars($row['lastname']); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($row['email']); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($row['phone']); ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($row['address']); ?>">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">  💾 Update  </button>
                            <a href="contact.php" class="btn btn-secondary"> ⬅️ Go Back  </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('utils/footer.php'); ?>