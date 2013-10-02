<?php
	$content = $_POST['content']; //get posted data
//	$content = mysql_real_escape_string($content);  //escape string 
	echo file_put_contents($_POST['filename'],trim($content)) == false ? "Error: Data not saved": "Data saved";
?>
