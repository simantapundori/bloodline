<?php
include 'includes/db_connect.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "DELETE FROM donors WHERE id=$id";
    if($conn->query($sql)){
        header("Location: find_donor.php"); // Redirect back to donor list
        exit;
    } else {
        echo "Error deleting donor: " . $conn->error;
    }
} else {
    echo "No donor ID provided.";
}
?>
