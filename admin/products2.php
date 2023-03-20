<?php
require 'conn.php';
$name=$_GET["cat"];
//str_replace(" ","+", $name);
echo "<h2>$name</h2>";
$sql="Select * from products where Product_Subcategory='$name' ";
$query=mysqli_query($con,$sql);
    if(!$query)
    {
        die("Query couldnt be processed ".mysqli_error($conect));
    }
    $rows=mysqli_num_rows($query);
if($rows>0)
{   
    while($result=mysqli_fetch_assoc($query))
    {
        echo "<b>Product name</b> = $result[Product_Name]<br/><b>Product Price</b>=$result[Price]<br/><br/>";
    }
}
?>