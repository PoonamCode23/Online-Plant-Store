<?php
require("conn.php");
require("adminpage.php");
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<hr>
 <h4 style="color: green; margin-left:200px;">View Appointment Details</h4>
<div class="container mt-5">
    <div class="row">
        <div class ="col-lg-12">
            <table class="table text-center  table-green">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Country</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query="SELECT * FROM `schedule`";
                $user_result=mysqli_query($con,$query);
                while($user_fetch=mysqli_fetch_assoc($user_result))
                {
                    echo"
                    <tr>
                    <td>$user_fetch[Help_Id]</td>
                    <td>$user_fetch[Name]</td>
                    <td>$user_fetch[Email]</td>
                    <td>$user_fetch[Phone]</td>
                    <td>$user_fetch[Country]</td>
                    <td>$user_fetch[Date]</td>
                    <td>$user_fetch[Time]</td>
                    <td>$user_fetch[Message]</td>
                    <td><form action='delete.php' method='POST'>
                    <button type='button' name='user_delete' class='btn btn-danger'>Delete</i></button>
                     </form>
                    </td>
                    ";
                }
                ?>    
        </tr>
    </tbody>
</table>
<style>body {background-color: #e6ffe6;}</style>
</div>
</div>
