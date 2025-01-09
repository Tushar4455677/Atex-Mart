<?php
// edit_users.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $phoneno = $_POST['phoneno'];

    
    $sql = "UPDATE users SET name = ?, email = ? ,description = ?,pname = ?,price = ?,stock = ?,phoneno = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $email,$description,$pname,$price,$stock,$phoneno,$id);

    if ($stmt->execute()) {
        echo "User details updated successfully.";
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #f3f4f6;
        }

        .box {
            position: relative;
            width: 380px;
            padding: 20px;
            background:black;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 400px;
            background: linear-gradient(45deg, transparent, #00eeff, #0088ff);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .box form {
            position: relative;
            z-index: 2;
        }

        .box h1 {
            text-align: center;
            color: gray;
        }

        .box label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .box input:focus {
            border-color: #00eeff;
            box-shadow: 0 0 5px rgba(0, 238, 255, 0.5);
        }

        .box input:hover {
            background: #f1f1f1;
        }

        .box button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #00eeff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .box button:hover {
            background: #0088ff;
        }
    </style>
</head>
<body>
<div class="box">
        <h1>Edit Orders</h1>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            <label for="address">Address</label>
            <input type="text" id="description" name="description" value="<?php echo htmlspecialchars($user['description']); ?>" required>
            <label for="Product Name">Product Name:</label>
            <input type="text" id="pname" name="pname" value="<?php echo htmlspecialchars($user['pname']); ?>" required>
            <label for="Price">Price:</label>
            <input type="text" id="price" name="price" value="<?php echo htmlspecialchars($user['price']); ?>" required>


            <label for="stock">stock:</label>
            <input type="number" id="stock" name="stock" value="<?php echo htmlspecialchars($user['stock']); ?>" required>
            <label for="phone number">Phone number:</label>
            <input type="number" id="phoneno" name="phoneno" value="<?php echo htmlspecialchars($user['phoneno']); ?>" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
