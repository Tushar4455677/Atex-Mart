<?php
// Receive POST Data from JS
$data = json_decode(file_get_contents("php://input"));

$orderID = $data->orderID;
$payerID = $data->payerID;
$paymentDetails = json_encode($data->paymentDetails);

// Example: Save to database (pseudo code)
// $conn = new mysqli("localhost", "root", "", "your_db");
// $conn->query("INSERT INTO payments (order_id, payer_id, details) VALUES ('$orderID', '$payerID', '$paymentDetails')");

// For now, just log the data
file_put_contents("paypal_logs.txt", print_r($data, true), FILE_APPEND);

echo json_encode(["status" => "Payment saved successfully"]);
?>
