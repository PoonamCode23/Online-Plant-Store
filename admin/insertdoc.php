<?php 

include "config.php";

	$t = $_POST['name'];
	$d = $_POST['desc'];
	$l = $_POST['link'];
	
	if (isset($_POST['submit'])) {
		$insert = mysql_query("INSERT INTO web_links (name,cbc,link) VALUES ('".$t."','".$d."','".$l."')");
		if ($insert) {
			echo "<h3>Insert is Done</h3>";
		}	
		else 
			echo "no";
	}

	echo "
		<form action='".$_SERVER['PHP_SELF']."' method='post'>
		title : <input type='text' name='name' /><br>
		desc  : <textarea rows='5' cols='55' name='desc'></textarea><br>
		link  : <input type='text' name='link' />
		<input type='submit' name='submit' value='Add link' />
		</form>
	";


?>