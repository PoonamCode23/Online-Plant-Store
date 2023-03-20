<?php
require("conn.php");
require("adminpage.php");
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<hr>
 <h4 style="color: green; margin-left:200px;">View Users</h4>
<div class="container mt-5">
    <div class="row">
        <div class ="col-lg-12">
            <table class="table text-center  table-green">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Password</th>
                    <th scope="col">RePassword</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query="SELECT * FROM `register`";
                $user_result=mysqli_query($con,$query);
                while($user_fetch=mysqli_fetch_assoc($user_result))
                {
                    echo"
                    <tr>
                    <td>$user_fetch[username]</td>
                    <td>$user_fetch[email]</td>
                    <td>$user_fetch[password]</td>
                    <td>$user_fetch[repassword]</td>
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
<style>body{background-color: #e6ffe6;}</style>
</div>
</div>
