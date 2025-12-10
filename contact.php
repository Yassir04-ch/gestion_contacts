
<?php include('utils/header.php');?>
<?php
$sql = "SELECT * FROM `contact`" ;
$result = mysqli_query($conn,$sql)
?>


   <h1 class="text-center col-12 bg-primary py-3 text-white my-2">All contacts</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php  while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <button class="btn btn-info" >edit</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" >supprimer</button>
                        </td>
                    </tr>

                    <?php endwhile; ?>
                <?php endif; ?>

            
                
                </tbody>
            </table>
        </div>
    </div>

<?php  include('utils/footer.php'); ?>

 