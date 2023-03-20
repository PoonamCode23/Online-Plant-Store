<?php
require 'conn.php';
 if(isset($_POST['user_delete']))
 {
$userid=$_POST["user_delete"];
$sql1= "DELETE FROM products WHERE Product_ID=$userid";
    $query1=mysqli_query($conn,$sql1);
    if(!$query1)
    {
        die("Query couldnt be processed ".mysqli_error($conn));
    }
    else
    {
        header("Location: $url");
    }}
?>
