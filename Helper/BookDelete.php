<?php
	
	include 'dbCon.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `book` WHERE ID=$getID",$con);
	header("location:basic_table.php");


?>
