<?php
include('header2.php');
include 'checkout.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error-message, .success-message {
            display: none;
            margin-top: 10px;
        }
          /* Main Table Container */
    table.table {
        background: linear-gradient(135deg, #ffffff, #f9f9f9);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    /* Table Header Styling */
    table thead {
        background-color: #0d6efd; /* Bootstrap Primary Blue */
        color: #ffffff;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    table th, table td {
        vertical-align: middle !important;
        padding: 16px;
    }

    /* Row Hover Effect */
    .table-hover tbody tr:hover {
        background-color: #e9f2ff;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    /* Quantity Box */
    .iquantity {
        width: 60px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 6px;
        background-color: #f8f9fa;
        text-align: center;
        transition: 0.2s;
    }

    .iquantity:focus {
        border-color: #0d6efd;
        outline: none;
        box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
    }

    /* Remove Button Styling */
    .btn-danger {
        background-color: #dc3545;
        border: none;
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 6px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
        transform: scale(1.05);
    }
    .title{
        
        font-size: 2.5rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        background: -webkit-linear-gradient(45deg, #ff9a9e, #fad0c4);
        background: linear-gradient(45deg, #ff9a9e, #fad0c4);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent; /* Makes text gradient colored */
    
        }
    

    /* Responsive Typography */
    @media (max-width: 768px) {
        table.table {
            font-size: 14px;
        }

        .iquantity {
            width: 45px;
        }

        .btn-danger {
            font-size: 12px;
            padding: 4px 10px;
        }
    }

    /* Smooth Shadow on Focus */
    input[type="number"]:focus {
        box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
    }
    </style>
</head>
<body>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-black  mt-5 mb-5 mb-5">
                 <h1 class="title">CheckOutYour Cart and Pay now to continue..</h1>
            </div>
            <div class="col-lg-8">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th> <!-- Fixed typo "Nane" to "Name" -->
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $key => $value) {
        $sr = $key + 1;
       
       
        echo "
        <tr>
            <td>$sr</td>
            <td>{$value['Item_Name']}</td>
            <td>
    {$value['price']}
    <input type='hidden' class='iprice' value='{$value['price']}'>
</td>
            <td><input class='text-center iquantity'  onChange='subTotal()' type='number' value='{$value['Quantity']}' min='1' max='10'></td>
            <td class='itotal'></td>
            <td>
                <form action='manage_cart2.php' method='POST'>
                    <button type='submit' name='Remove' class='btn btn-sm btn-danger'>Remove</button>
                    <input type='hidden' name='Item_Name' value='{$value['Item_Name']}'>
                </form>
            </td>
        </tr>
    ";
}
}
?>
    
  </tbody>
</table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                <h3>Grand Total:</h3>
                <h5 class="text-right" id="gtotal"></h5>
                <br>
                
               <form>
               <div class="form-check">
               <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Credit/debit & Online Payments
  </label>
</div>
<div class="form-check mt-3">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cash on delivery
  </label>
</div>
<a href="" class="btn btn-primary  text-decoration-none text-black" style="margin-top:20px;width:200px;">Pay Now</a>
               </form>
               <div id="paypal-button-container" class="mt-2"></div>
<div id="result-message" class="mt-2 text-success"></div>
           
            </div>
        </div>
    </div>
    </div>
    
</div>
    <script>
    var gt = 0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');

function subTotal() {
    gt = 0;
    for (var i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt += (iprice[i].value) * (iquantity[i].value);
    }
    gtotal.innerText = gt;
}

subTotal();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AQ8hivgwF9WLVB6hRYjTy7Qv1mylz6ohpqfrobxyycizd8q0-4O763Bbbl1_GVedKi2hgO4z5-XXlSAk&currency=USD"></script>

<script>
paypal.Buttons({
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: document.getElementById("gtotal").innerText
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            // Send payment data to PHP backend
            fetch('save_transaction.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    transaction_id: details.id,
                    payer_name: details.payer.name.given_name + " " + details.payer.name.surname,
                    payer_email: details.payer.email_address,
                    amount: details.purchase_units[0].amount.value,
                    currency: details.purchase_units[0].amount.currency_code,
                    status: details.status
                })
            }).then(res => res.json())
              .then(data => {
                  if (data.success) {
                      // ✅ Redirect to thank you page
                      window.location.href = "thankyou.php";
                  } else {
                      alert("Payment saved failed!");
                  }
              });
        });
    }
}).render('#paypal-button-container');
</script>


</body>
</html>
