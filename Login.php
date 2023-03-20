
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sign In</title>
</head>
<body>
<?php 
require 'nav1.php';
function login()
{
    echo <<< token1
    <div class="login-wrapper">
    <div class="login-inner-wrapper">
    <div class="have-account">
    <h3>
     Don't have an account?
     </h3>
    <a href="signup.php" class="signup-btn">
     <button type=submit>
        Sign Up
      </button>
    </a>
    </div>
        <form action=$_SERVER[PHP_SELF] method=post autocomplete=off>
        <input type=hidden name=check value=1/>
        <h3 style="color:green;">
        Username</h3>
        <input type=text name=name1 />
        <h3 style="color:green;">Password</h3>
        <input type=password name=psword1 />
        </br>
		<button type=submit>Sign In</button>
    </div>
    </div>
token1;
} 
?>
    <?php
     if (isset($_SESSION['admin'])) {
        echo"<script> window.location.href='admin/adminpage.php'</script>";      
    } elseif (isset($_SESSION['user'])) {
        echo"<script> window.location.href='plant.php'</script>";
    } else {
        if (isset($_POST['check'])) {
            require 'conn.php';
            $username = $_POST['name1'];
            $password = $_POST['psword1'];
            $sql1 = "select * from admin where Username='$username' AND Password='$password' ";
            $query1 = mysqli_query($con, $sql1);
            if (!$query1) {
                die("Data couldnt be selected" . mysqli_error($con));
            }
            $rows1 = mysqli_num_rows($query1);
            if ($rows1 > 0) {
                $_SESSION['admin'] = $username;
                echo "<script> alert('You are logged in as Admin.') </script>";
                echo"<script> window.location.href='admin/adminpage.php'</script>";
               
            } else {
                $sql2 = "select * from register where username='$username' AND password='$password' ";
                $query2 = mysqli_query($con, $sql2);
                if (!$query2) {
                    die('Data couldnt be selected ' . mysqli_error($con));
                }
                $rows2 = mysqli_num_rows($query2);
                if ($rows2 > 0) {
                    $_SESSION['user'] = $username;
                    echo "<script> alert('You are logged in as $_SESSION[user].') </script>";
                    echo"<script> window.location.href='plant.php'</script>";;
                
                } else {
                    echo "<script> alert( 'Incorrect Name or Password' )</script>";
                     echo"<script> window.location.href='login.php'</script>";
                    login();
                }
            }
        } else {
            login();
        }
    } require'footer.php';?>
    </body>
    </html>
    <style>
    body  {
  background-image: url("images/sprout.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 100% 110vh;
    }
    .login-wrapper {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-inner-wrapper {
        padding: 2rem;
        box-shadow: 10px 10px 33px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 10px 10px 33px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 33px 0px rgba(0, 0, 0, 0.75);

    }

    h3 {
        margin: 1rem 0;
    }

    .container {
        max-width: 1200px;
        margin: auto;
    }

    .have-account {
        display: flex;
    }

    input[type="text"],
    input[type="password"] {
        width: 380px;
        padding: 5px 5px 8px 10px;
        display: block;
        border: none;
        border-radius: 50px;
        background: lavender;
        color: black;
        text-align: justiy;
        font-size: 25px;
    }

    .signup-btn {
        margin: 18.7px 20px;
    }
    .home{
        margin-top:20px;
    }
    
    </style>

