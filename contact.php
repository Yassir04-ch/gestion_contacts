<?php
session_start();
include('utils/header.php');

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM `contact` WHERE user_id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $user_id]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-primary fw-bold">📇 All Contacts</h2>
        <a class="btn btn-success shadow-sm" href="addcont.php"> ➕ Add Contact </a>
    </div>

    <?php if ($stmt->rowCount() <= 0): ?>
        <div class="alert alert-warning text-center">
            No contacts to display. Add a contact
        </div>
    <?php else: ?>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-bordered align-middle mb-0">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach ($rows as $row): ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"   href="formupdat.php?id=<?= $row['id']; ?>"> ✏️ Edit </a>
                                </td>
                                <td>
                                    <a  class="btn btn-outline-danger btn-sm btn-delete" href="logic/delete.php?id=<?= $row['id']; ?>"> 🗑 Delete </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>

</div>

<?php include('utils/footer.php'); ?>