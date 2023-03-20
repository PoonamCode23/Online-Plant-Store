<?php 
require ('nav1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cart</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1 style="background-image: url('images/pink.jpg');width:100%; color: #006600";>My Cart</h1>
</div>
<div class ="col-lg-9">
<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:#003300">S.N</th>
      <th scope="col" style="color:#003300">Product Name</th>
      <th scope="col"style="color:#003300">Price</th>
      <th scope="col"style="color:#003300">Quantity</th>
      <th scope="col"style="color:#003300">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
 if (isset($_SESSION['cart']))
  {
    foreach($_SESSION['cart']as $key=>$value)
    {
        $sr=$key+1;
        echo"
        <tr>
        <td>$sr</td>
        <td>$value[plant]</td>
        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'>
        <td>
        <form action='manage.php' method='POST' >
        <input class='text-center iquantity'name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='15'>
        <input type='hidden' name='plant' value='$value[plant]'>
      </form>
      </td>
        <td class='itotal'></td>
        <form action='manage.php' method='POST'>
        <td><button name='remove_item' ><div class=bi bi-cart style='font-size:15x;color:green'>Remove</div></button></td>
        <input type='hidden' name='plant' value='$value[plant]'>
        </form>
        </td>
        </tr>
    ";}
  }
?>

   <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>-->
  </tbody>
</table>
</div>
<div class="col-lg-3">
<div class ="border bg-light rounded p-4" style="background-color:#e6faff";>
<h4 style="color:#00b300">Grand Total:</h4>
<h5 class="text-right" id="gtotal"></h5>
<br/>
<?php
if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0){
?>

<form action="purchase.php" method="POST" autocomplete="off">
<div class="form-group">
    <label style="color:#00b300">Full Name</label>
    <input type="text" name="fullname" class="form-control" required>
  </div>
  <div class="form-group">
    <label style="color:#00b300">Number</label>
    <input type="number" name="number" class="form-control"required>
  </div>
  <div class="form-group">
    <label style="color:#00b300">Address</label>
    <input type="text" name="address" class="form-control"required>
  </div>
  <button class="btn btn-primary btn-block" style="background-color:#00b300" name="purchase">Make Purchase</button>
</form>
<?php
}
?>
</div>
</div>
</div>
</div>
<?php require 'footer.php'; ?>


<script>

var gt=0;
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');
function subtotal()
{
  gt=0;
  for(i=0;i<iprice.length;i++)
  {
     itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
     gt=gt+(iprice[i].value)*(iquantity[i].value);
     /*price 650 qty 1  gt=0+(650*1) 
     *price 750 qty 2  gt=650+(750*2) ====2150
     *price 850 qty 1  gt=2150+(350*1)====3000 
     */

  }
  gtotal.innerText=gt;
}
subtotal();
</script>
<style>
  body {background-color: #e6ffe6;}
</style>

</body>
</html>