<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <?php require 'nav1.php'?>

    <?php function register()
    {
        echo <<<token1
        <div class="login-wrapper">
        <div class="login-inner-wrapper">
        <h2 text-transform: capitalize;"> Create an Account Here</h2>
        <form action="$_SERVER[PHP_SELF]" method="post" 
        <input type="hidden" name="check" value="1"/>
		<h3>Username</h3><input type="text" name="name"/><br/><br/>
        <h3>Email</h3><input type="email" name="email"/><br/><br/>
        <h3>Password</h3><input type="password" name="psword"/><br/><br/>
        <h3>Re-Password</h3><input type="password" name="repsword"/><br/><br/>
		<button type="submit">Create Profile</button></form><br/>
        </div>
        </div>
token1;
    } ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
    </head>

    <body>
       
        <?php 
        if (isset($_SESSION['admin'])) {
             echo"<script> window.location.href='admin/adminpage.php'</script>";
        } elseif (isset($_SESSION['user'])) {
            echo"<script> window.location.href='plant.php'</script>";
         
        } else {
            register();
            if (isset($_POST['check'])) {
                require 'conn.php';
                $sql = "INSERT INTO `register`( `username`, `email`, `password`, `repassword`) VALUES('$_POST[name]', '$_POST[email]', '$_POST[psword]', '$_POST[repsword]')";
                $query = mysqli_query($con, $sql);
                if (!$query) {
                    die('Data couldnt be inserted ' . mysqli_error($con));
                }
                $_SESSION['user'] = $_POST['name'];
                echo "<script> alert('You are now registerd <b>$_SESSION[user]</b><br/>
                 Click here to <a href=logout.php>Logout</a>')</script>";
                 echo"<script> window.location.href='signup.php'</script>";
                mysqli_close($con);
            }
        } ?>
    </body>
    <style>
  

  .login-wrapper {
      height: 110vh;
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
  body  {
background-image: url("images/dd.jpg");
background-color: #cccccc;
background-repeat: no-repeat;
background-size: 100% 150vh;
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
  input[type="password"],
  input[type="email"] {
      width: 400px;
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
      margin: 20px 20px;
  }
  </style>

    </html>