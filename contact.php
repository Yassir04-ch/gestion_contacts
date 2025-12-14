<?php
session_start();
include('utils/header.php');

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM `contact` WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
?>

<h2 class="text-center col-12 bg-primary py-3 text-white my-2">All contacts</h2>
<a class="btn btn-primary btn-translate  py-2" href="addcont.php">add contact</a>

<?php if (mysqli_num_rows($result) <= 0): ?>
<h3 class="alert alert-warning text-center my-3" role="alert">No contacts to display. Add a contact</h3>
<?php endif ?>

<?php if (mysqli_num_rows($result) > 0): ?>
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
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a class="btn btn-info" href="updat.php?id=<?php echo $row['id']; ?>">edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">X</a>
                            </td>
                        </tr>

                    <?php endwhile; ?>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    <?php include('utils/footer.php'); ?>