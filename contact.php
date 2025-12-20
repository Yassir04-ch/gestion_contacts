<?php
session_start();
include('utils/header.php');

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM `contact` WHERE user_id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $user_id]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2 class="text-center col-12 bg-primary py-3 text-white my-1">All contacts</h2>
<a class="btn btn-primary btn-translate  py-2" href="addcont.php">add contact</a>

<?php if ($stmt->rowCount() <= 0): ?>
    <h3 class="alert alert-warning text-center my-3" role="alert">No contacts to display. Add a contact</h3>
<?php else: ?>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['firstname']); ?></td>
                            <td><?= htmlspecialchars($row['lastname']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td><?= htmlspecialchars($row['phone']); ?></td>
                            <td><?= htmlspecialchars($row['address']); ?></td>
                            <td>
                                <a class="btn btn-info" href="formupdat.php?id=<?= $row['id']; ?>">edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="logic/delete.php?id=<?= $row['id']; ?>">X</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>

<?php include('utils/footer.php'); ?>