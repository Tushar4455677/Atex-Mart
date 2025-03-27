<?php
include 'db_config.php'; // Database configuration file included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $description = trim($_POST["description"]);
    $pname = trim($_POST["pname"]);
    $price = trim($_POST["price"]);
    $stock = trim($_POST["stock"]);
    $phoneno = trim($_POST["phoneno"]);

    if (empty($name)) $errors["name"] = "Name is required";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors["email"] = "Valid email is required";
    if (empty($description)) $errors["description"] = "Description is required";
    if (empty($pname)) $errors["pname"] = "Product name is required";
    if (empty($price) || $price <= 0) $errors["price"] = "Enter valid price";
    if (empty($stock) || $stock < 0) $errors["stock"] = "Stock must be valid";
    if (empty($phoneno) || strlen($phoneno) < 10) $errors["phoneno"] = "Enter valid phone number";

    if (!empty($errors)) {
        echo json_encode(["status" => "error", "errors" => $errors]);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO products (name, email, description, pname, price, stock, phoneno) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiii", $name, $email, $description, $pname, $price, $stock, $phoneno);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "errors" => ["db" => "Failed to process order"]]);
    }

    $stmt->close();
    $conn->close();
}
?>
