<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Blood</title>
    <link rel="stylesheet" href="/bloodline/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

<?php
$districts = ["Bagerhat","Bandarban","Barguna","Barishal","Bhola","Bogra","Brahmanbaria","Chandpur","Chattogram","Chuadanga","Cox's Bazar","Dinajpur","Faridpur","Feni","Gaibandha","Gazipur","Gopalganj","Habiganj","Jamalpur","Jashore","Jhalokathi","Jhenaidah","Joypurhat","Khagrachhari","Khulna","Kishoreganj","Kurigram","Kushtia","Lalmonirhat","Lamabazar","Madarganj","Madaripur","Magura","Manikganj","Meherpur","Moulvibazar","Munshiganj","MyMensingh","Narayanganj","Narsingdi","Natore","Nawabganj","Netrakona","Narail","Nilphamari","Noakhali","Pabna","Panchagarh","Patuakhali","Pirojpur","Rajbari","Rajshahi","Rangamati","Rangpur","Satkhira","Shariatpur","Sherpur","Sirajganj","Sunamganj","Sylhet","Tangail","Thakurgaon"];
?>

<div style="padding:20px;">
<h2 style="text-align:center;">Request Blood</h2>
<form action="save_request.php" method="POST">
    <input type="text" name="requester_name" placeholder="Full Name" required>
    <select name="blood_group" required>
        <option value="">Select Blood Group</option>
        <option>A+</option><option>A-</option>
        <option>B+</option><option>B-</option>
        <option>O+</option><option>O-</option>
        <option>AB+</option><option>AB-</option>
    </select>
    <select name="district" required>
        <option value="">Select District</option>
        <?php foreach($districts as $d) echo "<option>$d</option>"; ?>
    </select>
    <input type="text" name="address" placeholder="Full Address" required>
    <input type="text" name="contact" placeholder="Phone Number" required>
    <select name="urgency" required>
        <option value="normal">Normal</option>
        <option value="urgent">Urgent</option>
    </select>
    <button type="submit">Submit Request</button>
</form>
</div>

</body>
</html>
