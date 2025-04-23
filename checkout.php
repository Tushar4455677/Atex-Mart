
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proceed to Checkout | Atex Mart</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f9f9f9;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #2e2e2e;
      padding: 20px 36px;
      color: white;
    }

    .navbar .logo {
      font-size: 24px;
      font-weight: 600;
      margin-left:30px;
    }

    .navbar .nav-links a {
      color: white;
      margin-right: 45px;
      text-decoration: none;
      font-weight: 500;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 30px;
      gap: 20px;
    }

    /* Left: Basic Details */
    .checkout-form {
      flex: 1;
      min-width: 320px;
      background-color: #ffffff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .checkout-form h2 {
      margin-bottom: 30px;
      color: #333;
    }

    .form-group {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .form-group input,
    textarea {
      flex: 1;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 16px;
      margin-bottom: 15px;
      width: 100%;
    }

    textarea {
      resize: vertical;
    }

    /* Right: Order Summary */
    .order-summary {
      flex: 1;
      min-width: 320px;
      background-color: #ffffff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .order-summary h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .order-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 12px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }

    .total-price {
      font-size: 18px;
      font-weight: 600;
      margin-top: 20px;
    }

    .place-order-btn {
      margin-top: 25px;
      margin-left:380px;
      padding: 14px 20px;
      background-color: #007bff;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
      width: 200px;
      display: flex; justify-content: center;
      

    }

    .place-order-btn:hover {
      background-color: #0056b3;
    }

    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">Atex Mart</div>
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">Collections</a>
      <a href="#">Cart</a>
    </div>
  </div>

  <!-- Main Container -->
  <div class="container">
  <div id="alert-box" style="display:none; padding: 15px; text-align: center; font-weight: 500; font-size: 16px;"></div>

    <!-- Left: Basic Details Form -->
    <div class="checkout-form">
      <h2>Fill out your Basic details first to order products before your payment</h2>
      <form id="checkoutForm">
  <div class="form-group">
    <input type="text" name="fullname" id="fullname" placeholder="Full Name">
    <input type="email" name="email" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="tel" name="phone" id="phone" placeholder="Phone Number">
    <input type="text" name="pincode" id="pincode" placeholder="Pin Code">
  </div>
  <div class="form-group">
    <textarea rows="4" name="address" id="address" placeholder="Full Address"></textarea>
  </div>
  <button type="submit" class="place-order-btn">Place your order</button>
  
  <div id="responseMsg" style="color: red; font-weight: bold;"></div>

  
  


    

    
    

  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.place-order-btn').click(function(e) {
      e.preventDefault();

      var fullname = $('input[placeholder="Full Name"]').val().trim();
      var email = $('input[placeholder="Email"]').val().trim();
      var phone = $('input[placeholder="Phone Number"]').val().trim();
      var pincode = $('input[placeholder="Pin Code"]').val().trim();
      var address = $('textarea[placeholder="Full Address"]').val().trim();

      $.ajax({
        url: 'checkout_process.php',
        type: 'POST',
        data: {
          fullname: fullname,
          email: email,
          phone: phone,
          pincode: pincode,
          address: address
        },
        success: function(response) {
          showAlert(response); // Show message on top

          if (response.trim() === "success") {
            setTimeout(function() {
              window.location.href = "payment.php";
            }, 1000);
          }
        }
      });
    });

    function showAlert(message) {
      var alertBox = $('#alert-box');

      
      if (message.trim() === "success") {
        alertBox.css("background", "#d4edda").css("color", "#155724").css("border", "1px solid #c3e6cb");
        alertBox.text("Order placed successfully!");
      } else {
        alertBox.css("background", "#f8d7da").css("color", "#721c24").css("border", "1px solid #f5c6cb");
        alertBox.text(message);
      }

      alertBox.slideDown();

      
      setTimeout(function() {
        alertBox.slideUp();
      }, 2000);
    }
  });
</script>


</body>
</html>
