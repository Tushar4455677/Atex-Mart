<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            color: #fff;
        }

        .thank-you-container {
            text-align: center;
            padding: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .thank-you-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .thank-you-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .animated-check {
            font-size: 4rem;
            color: #28a745;
            animation: bounce 1s infinite;
        }

        .back-home-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s, transform 0.2s;
        }

        .back-home-btn:hover {
            background: #218838;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="animated-check">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Thank You!</h1>
        <p>We appreciate your order! Your purchase has been successfully placed and is now being processed.<br>
           Thank you for choosing Atex Mart Order Service. We hope you had a wonderful shopping experience with us!</p>
        <a href="logout.php" class="back-home-btn">Back to Home</a>
    </div>
</body>
</html>
