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
$select_query="SELECT * FROM `subcategory` WHERE Sname='$product'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0)
    {
    echo"<script>alert('This product has already been added.')</script>";
    }
    else
    {
    $query="insert into subcategory(Sname, Cname) values('$product', '$_POST[catname]')";
    $result=mysqli_query($con,$query);
    if($result)
    {
    echo"<script>alert('Product has been inserted successfully')</script>";
    }
    mysqli_close($con);
    }}
  
?>	<div class="container">
	<form action="" method="POST">
    <b><label style="color:green;">Product Subcategory Name</label></b>
		<input type="text" name="p_title" class="form-control" required>
  </br>
    <b><label style="color:green;">Main Category</label></b>
		<select name=catname>";
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
    foreach($res as $result)
    {
        echo "<option value=$result[category_title]>$result[category_title]</option>";
    }}?>
    echo "</select>



  </br>
		<input type="submit" name="submit" value="Add" class="btn-primary">

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
    