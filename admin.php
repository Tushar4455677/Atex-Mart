<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $admin_username = 'tushar gupta';
    $admin_password = 'admin@123';

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if ($username === $admin_username && $password === $admin_password) {
        
        $_SESSION['admin_logged_in'] = true;

        
        header('Location: dashboard.php');
        exit();
    } else {
        
        $error_message = 'Invalid username or password';
    }
}
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
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="box">
        <h1><b>Admin Login</b></h1>
        <?php if (!empty($error_message)): ?>
            <div class="error"> <?= $error_message ?> </div>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="username" name="username" value="" placeholder="enter admins's name" required>

            <label for="email">Email:</label>
            <input type="email" id="password" name="password" value="" placeholder="enter admins password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
