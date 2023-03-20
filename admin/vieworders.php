<?php
require("conn.php");
require("adminpage.php");
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<hr>
 <h4 style="color: green; margin-left:200px;">View Customers and Orders</h4>
<div class="container mt-5">
    <div class="row">
        <div class ="col-lg-12">
            <table class="table text-center  table-green">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Orders</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query="SELECT * FROM `order_manager`";
                $user_result=mysqli_query($con,$query);
                while($user_fetch=mysqli_fetch_assoc($user_result))
                {
                    echo"
                    <tr>
                    <td>$user_fetch[Order_ID]</td>
                    <td>$user_fetch[Full_Name]</td>
                    <td>$user_fetch[Phone_No]</td>
                    <td>$user_fetch[Address]</td>
                    <td>
                    <table class='table text-center table-green'>
                    <thead>
                        <tr>
                            <th scope='col'>Item Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
                    $order="SELECT * FROM `user_orders`WHERE `Order_Id`='$user_fetch[Order_ID]'";
                    $result=mysqli_query($con,$order);
                    while($order_fetch=mysqli_fetch_assoc($result))
                    {
                        echo"
                        <tr>
                        <td>$order_fetch[Plant_Name]</td>
                        <td>$order_fetch[Price]</td>
                        <td>$order_fetch[Quantity]</td>
                        <td><form action='delete.php' method='POST'>
                    <button type='button' name='user_delete' class='btn btn-danger'>Delete</i></button>
                     </form>
                    </td>
                        </tr>";    
                    }
                     echo"
                     </tbody>
                     </table>
                     </td>
                        </tr>";
                }
                ?>
                
        </tr>
    </tbody>
</table>
<style>body{background-color: #e6ffe6;}</style>
</div>
</div>
