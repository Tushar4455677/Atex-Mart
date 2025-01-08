<?php
include('header2.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-info  mt-5 mb-5 mb-5">
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
<a href="manage_products.php" class="btn btn-primary text-decoration-none text-black" style="margin-top:20px;">Make pruchase</a>
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
</body>
</html>
