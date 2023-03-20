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
