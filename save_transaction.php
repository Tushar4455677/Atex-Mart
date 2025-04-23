<?php
session_start(); // Step 1: Session start

// DB config
$host = "localhost";
$user = "root";
$pass = "";
$db = "atexmart";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "DB connection failed"]));
}

// Check if user_id is set
if (!isset($_SESSION['user_id'])) {
    die(json_encode(["success" => false, "error" => "User not logged in"]));
}

// Step 2: Get logged in user ID
$user_id = $_SESSION['user_id'];

// Get JSON data
$data = json_decode(file_get_contents("php://input"), true);

// Sanitize inputs
$txn_id = $conn->real_escape_string($data['transaction_id']);
$payer_name = $conn->real_escape_string($data['payer_name']);
$payer_email = $conn->real_escape_string($data['payer_email']);
$amount = $conn->real_escape_string($data['amount']);
$currency = $conn->real_escape_string($data['currency']);
$status = $conn->real_escape_string($data['status']);

// Step 3: Insert including user_id
$sql = "INSERT INTO transactions (user_id, transaction_id, payer_name, payer_email, amount, currency, payment_status)
        VALUES ('$user_id', '$txn_id', '$payer_name', '$payer_email', '$amount', '$currency', '$status')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $conn->error]);
}
$conn->close();
?>
