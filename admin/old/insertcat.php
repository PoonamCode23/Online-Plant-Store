<!DOCTYPE html>
<html>
    <head>
        <title> Insert Categories</title>
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
$category=$_POST['cat_title'];
$select_query="SELECT * FROM `categories` WHERE category_title='$category'";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0)
    {
    echo"<script>alert('This category has already been added.')</script>";
    }
    else
    {
    $query="INSERT INTO `categories`( `category_title`) VALUES ('$category')";
    $result=mysqli_query($con,$query);
    if($result)
    {
    echo"<script>alert('Category has been inserted successfully')</script>";
    }
    mysqli_close($con);
    }}
?>	<div class="container">
	<form action="" method="POST">
		<b><label style="color:green;">Insert Categories </label></b>
		<input type="text" name="cat_title" class="form-control" required>
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
    