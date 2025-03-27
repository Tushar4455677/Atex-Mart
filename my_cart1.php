<?php
include('header1.php');

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
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-info mt-5 mb-5">
                 <h1>My Cart</h1>
            </div>
            <div class="col-lg-8">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th> <!-- Fixed typo "Nane" to "Name" -->
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
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
            <td><input class='text-center iquantity' onChange='subTotal()' type='number' value='{$value['Quantity']}' min='1' max='10'></td>
            <td class='itotal'></td>
            <td>
                <form action='manage_cart1.php' method='POST'>
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
                <h3> Grand Total:</h3>
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
<a href="" class="btn btn-primary text-decoration-none text-black" style="margin-top:20px;" data-bs-toggle="modal" data-bs-target="#purchaseModal">Make pruchase</a>
               </form>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Purchase Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="purchaseForm">
                    <div class="mb-2">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                        <span class="text-danger error-message" id="error-name"></span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                        <span class="text-danger error-message" id="error-email"></span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description">
                        <span class="text-danger error-message" id="error-description"></span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="pname">
                        <span class="text-danger error-message" id="error-pname"></span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price">
                        <span class="text-danger error-message" id="error-price"></span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Stock</label>
                        <input type="number" class="form-control" name="stock">
                        <span class="text-danger error-message" id="error-stock"></span>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="phoneno">
                        <span class="text-danger error-message" id="error-phoneno"></span>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Order Now</button>
                    <div class="alert alert-danger error-message mt-2" id="error-message"></div>
                    <div class="alert alert-success success-message mt-2" id="success-message">Product ordered successfully!</div>
                </form>
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
<script>
  $(document).ready(function() {
    $("#purchaseForm").submit(function(event) {
        event.preventDefault();
        $(".error-message").hide(); 

        $.ajax({
            type: "POST",
            url: "purchase.php",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === "error") {
                    $.each(response.errors, function(field, message) {
                        $("#error-" + field).text(message).fadeIn();

                        // Hide error message after 2 sec
                        setTimeout(function() {
                            $("#error-" + field).fadeOut();
                        }, 2000);
                    });
                } else if (response.status === "success") {
                    $("#success-message").fadeIn();

                    // Hide success message and redirect after 2 sec
                    setTimeout(function() {
                        $("#success-message").fadeOut();
                        window.location.href = "thankyou.php";
                    }, 2000);
                }
            }
        });
    });
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
