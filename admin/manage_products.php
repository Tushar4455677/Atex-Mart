<?php
$conn = new mysqli("localhost", "root", "", "project");

// कनेक्शन जांचें
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Product
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $phoneno = $_POST['phoneno'];

    $query = "INSERT INTO products (name, email, description, pname, price, stock, phoneno) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ssssdis", $name, $email, $description, $pname, $price, $stock, $phoneno);
        if ($stmt->execute()) {
           header("Location:thankyou.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error in query preparation: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placed Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            min-height: 100vh;
            margin: 0;
        }

        .navbar {
            background-color: #6a5acd;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-brand:hover {
            color: #ddd;
        }

        .heading-bar {
            background-color: #483d8b;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .main-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            flex-wrap: wrap;
        }

        .form-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            animation: slideIn 0.8s ease-in-out;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .form-group label {
            color: #555;
        }

        .form-group input {
            border-radius: 5px;
        }

        .form-group button {
            background: #6a5acd;
            border: none;
            border-radius: 5px;
            color: #fff;
            transition: background 0.3s ease;
        }

        .form-group button:hover {
            background: #483d8b;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 12px;
        }
        /* LOG OUT button hover animation */
.btn {
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.btn:hover {
    transform: scale(1.1);
    background-color: darkblue;
    color: white;
}

/* Search bar hover animation */
.search-bar {
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.search-bar:hover {
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.8);
    transform: scale(1.02);
}

/* Search button hover animation */
.btn-info {
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.btn-info:hover {
    transform: scale(1.1);
    background-color: darkcyan;
    color: white;
}


        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                text-align: center;
            }

            .form-container {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="Shopping.png" alt="" width="40px" height="40px"
            style="margin-right: 20px;"><b>Atex Mart Order Service</b></a>
            
            <form class="d-flex">
                
                
            <a href="logout.php" class="btn"style="color:red;background-color:blue;margin-right:40px;">LOG OUT</a>
                    <input class="search-bar" type="search" placeholder="Search Products" aria-label="Search">
                    <button class="btn btn-info ms-2" type="submit">Search</button>
                </form>
        
        </div>
    </nav>

    <!-- Heading Bar -->
    <div class="heading-bar">
    Placed your Order Here
    </div>

    <!-- Main Container -->
    <div class="container main-container">
       
        <!-- Image Container -->
        <div class="image-container col-md-6">
            <img src="order.jpg" alt="Order Illustration">
        </div>

        <!-- Form Container -->
        <div class="form-container col-md-6">
            <h2>Place Order</h2>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="description" class="form-control" placeholder="Enter your address" required>
                </div>

                <div class="form-group mb-3">
                    <label for="product-name">Product Name:</label>
                    <input type="text" id="product-name" name="pname" class="form-control" placeholder="Enter product name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="product-price">Product Price:</label>
                    <input type="number" id="product-price" name="price" class="form-control" placeholder="Enter product price" required>
                </div>

                <div class="form-group mb-3">
                    <label for="stock">Stock:</label>
                    <input type="number" id="stock" name="stock" class="form-control" placeholder="Enter stock quantity" required>
                </div>

                <div class="form-group mb-3">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phoneno" class="form-control" placeholder="Enter your phone number" required>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit Order</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>