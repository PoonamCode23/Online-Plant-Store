<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <?php require 'nav1.php'?>
        <div class="product-image">
            <img src="images/doctor.jpg"  alt=""width="100%" height="500" >
        </div>   
<section class="desc">
    <h2 class="product-desc">Solve all your gardening queries with the help of Infinite Green's plant and gardening experts. Get personalized gardening help and guidance to know the best plant fits for your home, get solutions to plant problems, grow your own vegetables, or understand plant care for a thriving indoor garden!</h2>
</section>
<p style="color:green; font-size:20px; text-align:center;"> Book your appointment by filling up this form. See you soon!</p>
    <div class="container2">
		<?php 
		if(isset($_POST['check']))
			{ 
          $name=$_POST['firstname']; 
          $email=$_POST['email']; 
          $phone=$_POST['phone']; 
          $date=$_POST['date'];
          $time=$_POST['time'];
          $hide=1;
        echo '<div class="success">Thank you <strong>'.$name.'.</strong> We have received your form. Your appointment has been scheduled on <strong>'.$date.'</strong> at <strong>'.$time.'.</strong> </div> '; 
			}
		?><?php if(!isset($hide)) {
        
        {
        echo <<< token1
        <form action="$_SERVER[PHP_SELF]" method="POST" autocomplete="off">
        <input type="hidden" name="check" value="1"/>
            <input type="text" id="fname" name="firstname" placeholder="Name"required>
            <input type="text" id="email" name="email" placeholder="Email"required>
            <input type="text" id="phone" name="phone" placeholder="Phone"required>
            <select id="country" name="country">
                <option value="Nepal">Nepal</option>
                <option value="India">India</option>
                <option value="China">China</option>
            </select>
            
         <b> Date:</b> <input type="date" id="date" name="date" placeholder="Date" >
          <b> Time:</b> <input type="time" id="time" name="time" placeholder="Time">
            <textarea id="txt" name="txt" placeholder="How can we help you?" style="height:150px"required></textarea>
            <button>Schedule Appointment</button>
        </form>  
token1;
    }}
?>
</div>
<?php
require 'conn.php';
    if(isset($_POST['check']))
    {
        $query1="INSERT INTO `schedule`( `Name`, `Email`, `Phone`, `Country`, `Date`, `Time`, `Message`)
         VALUES ('$_POST[firstname]','$_POST[email]','$_POST[phone]','$_POST[country]','$_POST[date]','$_POST[time]','$_POST[txt]')";
    if(!mysqli_query($con,$query1)){
    echo"<script>
    alert('SQL Error');
    window.location.href='doctor.php';
    </script>";
   }
  }
 ?>  
  <style>
    .desc{
    margin-top:10px;
    overflow: hidden;
    padding: 20px 0;
}

.product-desc{
    padding: 0 10vw;
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 20px;
    color:green;
    text-align:center;
}
.product-image{
    width: 100%;
    height: 75vh;
    padding : 0px 2px;
}
body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border:  1px solid #73AD21;;
            border-radius: 10px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=submit] {
            background-color: palevioletred;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: palevioletred;
        }

        .container {
            left: 10px;
        }
        .container2{
            border-radius: 5px;
            padding: 20px;
            margin: 0px;
            width: 50%;
            height: 520px;
            margin: auto;
           
          

        }
   
        h4 {
            top: 50px;
            position: absolute;
            margin-left: 750px;
            text-align: center;
        }

  .success 
{ 
  margin: 5px auto;
  border-radius: 5px;
  border: 3px solid #fff;
  background: #33CC00;
  color: #fff;
  padding: 10px;
}
</style>
<body>
</html>


