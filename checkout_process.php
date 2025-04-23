<?php
session_start();
include 'db_config.php'; 

if (!isset($_SESSION['user_id'])) {
    echo "User not logged in.";
    exit;
}

$user_id = $_SESSION['user_id']; 


$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$pincode = trim($_POST['pincode']);
$address = trim($_POST['address']);


if ($fullname == '' || $email == '' || $phone == '' || $pincode == '' || $address == '') {
    echo "Please fill all fields.";
    exit;
}


$sql = "INSERT INTO orders (user_id, fullname, email, phone, pincode, address)
        VALUES ('$user_id', '$fullname', '$email', '$phone', '$pincode', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Failed to place order. Try again.";
}
?>
