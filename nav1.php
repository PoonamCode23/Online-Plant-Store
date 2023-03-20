<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body> 

    <nav class="navbar">
        <div class="nav">
            <img src="images/infinite.jpg" class="brand-logo" alt="logo">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search plants">
                    <button class="search-btn">search</button>
                </div>
                <?php
                if(isset($_SESSION["user"]) || isset($_SESSION["admin"]))	
			    echo"<a href='logout.php'><i class='bi bi-box-arrow-right' style='font-size:30px;color:green'></i></a>";
			    else
			    echo "<a href='login.php'><i class='bi bi-person' style='font-size:30px;color:green'></i></a>";?>
                <div>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                    ?>
                <a href="mycart.php" class="cart"><i class="bi bi-cart "
                 style='font-size:30px;color:green'></i><span
               class='cart-number'><?php echo $count; ?></span></a>  
            </div>
    </nav>
    <div class="links-container">
        <div class="dropdown">
            <li class="link-item"><a href="plant.php" class="link"><i class="bi bi-house-heart-fill"></i><b>Home</b></a>
            </li>
        </div>
        <div class="dropdown">
            <li class="link-item"><a href="#" class="link"><i class='fas fa-seedling'></i><b>Plants</b></a></li>
            <div class="dropdown-content">
                <a href="airplants.php">Air Purifying Plants</a>
                <a href="indoorr.php">Indoor Plants</a>
                <a href="flowering.php">Flowering Plants</a>
                <a href="cacti.php">Cacti and succulents</a>
            </div>
        </div>
        <?php
     
        ?>
        <div class="dropdown">
            <li class="link-item"><a href="#" class="link"><b>Seeds</b></a></li>
            
            <div class="dropdown-content">
                <a href="leafy.php">Leafy Vegetables</a>
                <a href="winter.php">Winter Flowers</a>
                <a href="summer.php">Summer Flowers</a>
                <a href="herb.php">Herb Seed</a>
            </div>
        </div>
        <div class="dropdown">
            <li class="link-item"><a href="#" class="link"><b>Vase</b></a></li>
            <div class="dropdown-content">
                <a href="plastic.php">Plastic Pots</a>
                <a href="ceramic.php">Ceramic Pots</a>
            </div>
        </div>
        <div class="dropdown">
            <li class="link-item"><a href="#" class="link"><b>Plant Care</b><i
                        class='fas fa-hand-holding-heart'></i></a></li>
            <div class="dropdown-content">
                <a href="growth.php">Plant Growth</a>
                <a href="tools.php">Garden Tools</a>
            </div>
        </div>
        <div class="dropdown">
            <li class="link-item"><a href="doctor.php" class="link"><b>Call Doctor Green</b></a></li>
        </div>
        <div class="dropdown">
            <li class="link-item"><a href="new.php" class="link"><b>FAQs</b></a></li>
        </div>
        <?php
        $select_category="Select * from `categories` where cat_id >=6";
        $result_category=mysqli_query($con,$select_category);
        while($row_data=mysqli_fetch_assoc($result_category)){
            $category_title=$row_data['category_title'];
            $category_id=$row_data['cat_id'];
         echo "<li class='link-item'><a href='plant.php?brand=$category_id' class='link'><b>$category_title</b></a></li>";
        }
        ?>
        </div>
    </div>

    <style>
     * {
	    box-sizing: border-box;
      }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;}
    .navbar {
        background:#FAE6FA;
        display: flex;
        height: 17vh;
        flex-direction: column;
        justify-content: space-around;
    }

    .nav {
        padding: 10px 10vw;
    }

    .brand-logo {
        height: 70px;
        width: 100px;
        margin-right:40vh;

    }

    .nav-items {
        display: flex;
        align-items: center;
    }

    .search {
        width: 500px;
        display: flex;
    }

    .search-box {
        width:100%;
        height: 40px;
        padding: 10px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        border: 1px solid #d1d1d1;
        text-transform: capitalize;
        background: none;
        color: green;
        outline: none;
    }

    .search-btn {
        width: 20%;
        height: 40px;
        padding: 10px 20px;
        border: none;
        outline: none;
        cursor: pointer;
        background: #383838;
        color: wheat;
        text-transform: capitalize;
        font-size: 15px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .search-box::placeholder {
        color: #a9a9a9;
    }

    .nav-items a {
        margin-left: 20px;
    }

    .nav-items a img {
        width: 30px;
    }

    .links-container {
        position: sticky;
        width: 100%;
        top: 0;
        display: flex;
        padding: 10px 10vw;
        justify-content: center;
        list-style: none;
        border-top: 1px solid #d1d1d1;
        z-index: 99;
        background: #FAE6FA;
    }

    .link {
        text-transform: capitalize;
        padding: 0 10px;
        margin: 0 5px;
        text-decoration: none;
        color: green;
        font-size: 15px;
        opacity: 1;
        transition: .5s;
    }

    .link:hover {
        opacity: 1;
    }

    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: sticky;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: wheat;
        min-width: 260px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: green;
        font-size: 15px;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

    .cart {
        position: relative;
    }

    .cart-number {
        width: 18px;
        height: 20px;
        border-radius: 50%;
        background: red;
        color: white;
        position: absolute;
        top: 0;
        right: -13px;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    </style>
   
</body>

</html>