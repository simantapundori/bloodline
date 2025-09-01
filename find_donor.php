<?php
include 'includes/db_connect.php';

// Fetch all donors
$sql = "SELECT * FROM donors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Find Donor</title>
<style>
table {width:100%; border-collapse: collapse;}
th, td {padding:10px; border:1px solid #ccc; text-align:center;}
th {background:#d32f2f; color:#fff;}
.delete-btn {color:#fff; background:#b71c1c; padding:5px 10px; border-radius:5px; text-decoration:none;}
.delete-btn:hover {background:#d32f2f;}
</style>
</head>
<body>

<div style="text-align:topleft; margin:20px 0;">
    <a href="index.php" style="display:inline-block; padding:10px 20px; background:red; color:#fff; border-radius:8px; text-decoration:none; font-weight:bold;">
        ⬅ Back to Home
    </a>
</div>

<h1>Available Donors</h1>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Blood Group</th>
    <th>District</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

<?php if($result->num_rows > 0): ?>
    <?php while($donor = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $donor['id'] ?></td>
        <td><?= $donor['name'] ?></td>
        <td><?= $donor['blood_group'] ?></td>
        <td><?= $donor['district'] ?></td>
        <td><?= $donor['phone'] ?></td>
        <td>
            <a href="delete_donor.php?id=<?= $donor['id'] ?>" 
               onclick="return confirm('Are you sure you want to delete this donor?')" 
               class="delete-btn">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
<?php else: ?>
<tr><td colspan="6">No donors found.</td></tr>
<?php endif; ?>
</table>
</body>
</html>
