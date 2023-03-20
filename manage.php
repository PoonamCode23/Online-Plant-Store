<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
 if(isset($_POST['addtocart']))
 {
    if(isset($_SESSION['cart']))
    {
    $myitems=array_column($_SESSION['cart'],'plant');
    if (in_array($_POST['plant'],$myitems))
    {
        echo"<script>
        alert('The product has been already added.');
        window.location.href='plant.php';
        </script>";
    }
    else
    {
    $count=count($_SESSION['cart']);
    $_SESSION['cart'][$count]=array('plant'=>$_POST['plant'],'price'=>$_POST['price'],'Quantity'=>1);
        echo "<script>
        alert('The product is added');
        window.location.href='plant.php';
        </script>";
        }
    }
    else
    {
    $_SESSION['cart'][0]=array('plant'=>$_POST['plant'],'price'=>$_POST['price'],'Quantity'=>1);
    echo"<script>
        alert('The product is added.');
        window.location.href='plant.php';
        
        </script>";
    }
 }
 if(isset($_POST['remove_item']))
 {
     foreach($_SESSION['cart'] as $key => $value)
     {
          if($value['plant']==$_POST['plant'])
          {
              unset($_SESSION['cart'][$key]);
              $_SESSION['cart']=array_values($_SESSION['cart']);
              echo "<script>
              alert('Product Removed');
              window.location.href='mycart.php';
              </script>";
          }
     }
 }
 if(isset($_POST['Mod_Quantity']))
 {
    foreach($_SESSION['cart'] as $key => $value)
    {
         if($value['plant']==$_POST['plant'])
         {
            $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
             echo "<script>
             window.location.href='mycart.php';
             </script>";
         }
    }
 }
}
?>