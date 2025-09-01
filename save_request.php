<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Submission</title>
    <link rel="stylesheet" href="/bloodline/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['requester_name'];
    $blood_group = $_POST['blood_group'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $urgency = $_POST['urgency'];

    $sql = "INSERT INTO blood_requests (requester_name,blood_group,district,address,contact,urgency) VALUES ('$name','$blood_group','$district','$address','$contact','$urgency')";

    if($conn->query($sql)){
        echo "<p class='success' style='text-align:center;'>Blood request submitted successfully!</p>";
    } else {
        echo "<p class='error' style='text-align:center;'>Error: ".$conn->error."</p>";
    }
}
?>

<div class="post-links">
    <a href="index.php">Home</a>
    <a href="request_blood.php">Submit Another Request</a>
    <a href="find_donor.php">Find Donor</a>
    <a href="view_requests.php">View Requests</a>
</div>

</body>
</html>
