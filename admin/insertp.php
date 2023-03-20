<!DOCTYPE html>
<html>
    <head>
        <title> Product Name</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">   
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<?php

require("conn.php");
require("adminpage.php");
if (isset($_POST['submit']))
{
$product=$_POST['p_title'];
$select_query="SELECT * FROM `products` WHERE Product_Name='$product'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0)
    {
    echo"<script>alert('This product has already been added.')</script>";
    }
    else
    {
    $query="INSERT INTO `products`( Product_Name, Product_Subcategory,image_url, Price) VALUES ('$product', '$_POST[category]','$_POST[price]')";
    $result=mysqli_query($con,$query);
    if($result)
    {
    echo"<script>alert('Product has been inserted successfully')</script>";
    }
    }}
  
?>
	<div class="container">
	<form action="" method="POST">
    <b><label style="color:green;">Product Name</label></b>
		<input type="text" name="p_title" class="form-control" required>
  </br>
    <b><label style="color:green;">Product Subcategory</label></b>
    <?php
    $sql1="Select * from categories";
    $query1=mysqli_query($con,$sql1);
    if(!$query1)
    {
        die("Query couldnt be processed ".mysqli_error($con));
    }
    $rows=mysqli_num_rows($query1);
if($rows>0)
{   
    $res=mysqli_fetch_all($query1, MYSQLI_ASSOC);
}
    ?>
        <?php
        
       echo " <select name=category >";
       if($rows>0)
       {   
           foreach($res as $result)
       {
           echo "<optgroup label=$result[category_title]>";
           $sql2="Select * from subcategory where cname='$result[category_title]' ";
           $query2=mysqli_query($conn,$sql2);
           if(!$query2)
           {
               die("Options couldnt be loaded ".mysqli_error($connect));
           }
           $rows2=mysqli_num_rows($query2);
       if($rows2>0)
       {   
       while($result2=mysqli_fetch_assoc($query2))
           {
               echo "<option value='$result2[Sname]'>$result2[Sname]</option>";
           }
       }
          echo " </optgroup>";
           }}
        
    echo "</select><br/><br/>";?>
  </br>
  <b><label style="color:green;">Product Image</label></b>
  <input type="file" name="file"/><br/><br/>

  
    <b><label style="color:green;">Price</label></b>
		<input type="text" name="price" class="form-control" >
		<input type="submit" name="submit" value="Insert" class="btn-primary">
    </form>
</div>
</body>
</html>
    <style>

    body{background-color: #e6ffe6;}

	.form-control {
    width: 150%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.container 
{ 
margin-left: 32%;
width: 400px ;
margin-top: 5%;
 }

label{
font-size: 18px;
} 

.btn-primary {
    margin-top:2%;
    padding: 3px 6px;
    border: 1px solid transparent;
    border-radius: 4px; 
    background-color: green;
}
</style>
    