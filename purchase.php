<?php
session_start();
$con=mysqli_connect("localhost","root","","customers");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1="INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`) VALUES ('$_POST[fullname]','$_POST[number]','$_POST[address]')";
    if(mysqli_query($con,$query1))
    {
    $Order_Id=mysqli_insert_id($con);
    $query2="INSERT INTO `user_orders`(`Order_ID`, `Plant_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";//prepared statement
    $stmt=mysqli_prepare($con,$query2);
    if($stmt)
    {
    mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$plant,$price,$Quantity);
    foreach($_SESSION['cart']as $key=>$values)//prepare query for one time and and execute multiple times changing values
    {
        $plant=$values['plant'];
        $price=$values['price'];
        $Quantity=$values['Quantity'];
        mysqli_stmt_execute($stmt);
    }
    unset($_SESSION['cart']);
    echo"<script>
    alert('Order Placed');
    window.location.href='plant.php';
    </script>";
 

    }
    else{
        echo"<script>
    alert('SQL Query Prepare Error');
    window.location.href='mycart.php';
    </script>";
   }
}

   else{
    echo"<script>
    alert('SQL Error');
    window.location.href='mycart.php';
    </script>";
   }
  }
}
?>