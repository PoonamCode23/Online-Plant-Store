<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
	<div id="logo">Code<span class="smart">WithUs.com</span></div>
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Register.php">Register</a></li>
			<li><?php
			session_start();
			if(isset($_SESSION["user"]) || isset($_SESSION["admin"]))	
			echo"<a href=logout.php>Logout</a>";
			else
			echo "<a href=login.php>Login</a>";
			?></li>
			</ul>
	</div>
</header>
<h1 align="center">Code Review And Discussion Forum</h1>
<div class="selection">
	<span class="text">Search your query?</span>
<br/>
	<form action="/action_page.php" method="get">
		<textarea placeholder="Search here..." rows="1" cols="20"></textarea>
        <input type="submit" value="Search"/>
	</form>
</div>
</body>
</html>