<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Blood Requests</title>
    <link rel="stylesheet" href="/bloodline/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<div style="padding:20px;">
<h2 style="text-align:center;">All Blood Requests</h2>

<?php
$result = $conn->query("SELECT * FROM blood_requests ORDER BY urgency='urgent' DESC, created_at DESC");

if($result->num_rows>0){
    echo "<table><tr><th>Name</th><th>Blood Group</th><th>District</th><th>Address</th><th>Contact</th><th>Urgency</th></tr>";
    while($row = $result->fetch_assoc()){
        $color = ($row['urgency']=='urgent') ? "style='color:#ff1744;font-weight:bold'" : "";
        echo "<tr $color>
        <td>{$row['requester_name']}</td>
        <td>{$row['blood_group']}</td>
        <td>{$row['district']}</td>
        <td>{$row['address']}</td>
        <td>{$row['contact']}</td>
        <td>{$row['urgency']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p class='error'>No blood requests yet.</p>";
}
?>
</div>

</body>
</html>
