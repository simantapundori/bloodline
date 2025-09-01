<?php include 'includes/db_connect.php'; ?>
<?php include 'includes/db_connect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO donors (name,blood_group,district,address,phone,email) 
            VALUES ('$name','$blood_group','$district','$address','$phone','$email')";
    if($conn->query($sql)){
        echo "<p style='color:green; font-weight:bold; font-size:18px;'>✅ Donor Registered Successfully!</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Error: " . $conn->error . "</p>";
    }
}
?>

<a href="index.php" style="display:inline-block; margin-top:10px; text-decoration:none; color:#007BFF;">
    Go to Home
</a>


<style>
    .success-container {
        text-align: center;
        margin: 50px auto;
        padding: 30px;
        max-width: 400px;
        background: #f00909ff;
        border: 2px solid #be0a0aff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .success-message {
        color: #ffffffff;
        font-size: 1.5rem;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .home-btn {
        display: inline-block;
        padding: 10px 20px;
        background: #18b830ff;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: background 0.2s ease-in-out;
    }

    .home-btn:hover {
        background: #05e214ff;
    }

    .error {
        text-align: center;
        color: red;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
