<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background: #f0f2f5;
        }

        .header {
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
            color: #fff;
            padding: 15px 20px;
            text-align: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            box-shadow: 4px 0 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .sidebar:hover {
            width: 280px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
            padding: 10px;
            background: #34495e;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background: #1abc9c;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 1.1rem;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar ul li:hover a {
            color: #fff;
        }

        .content {
            flex: 1;
            padding: 20px;
            animation: fadeIn 0.5s ease;
        }

        .content h2 {
            color: #2c3e50;
        }

        .content p {
            color: #7f8c8d;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                display: flex;
                justify-content: space-around;
                padding: 10px 0;
            }

            .sidebar ul {
                display: flex;
                gap: 10px;
            }

            .sidebar ul li {
                flex: 1;
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        Admin Dashboard
    </div>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="manage_products.php">Manage Products</a></li>
                <li><a href="manage_orders.php">Manage Orders</a></li>
                <li><a href="manage_users.php">Manage Users</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Welcome, Admin!</h2>
            <p>Choose an option from the sidebar to get started.</p>
        </div>
    </div>
</body>
</html>