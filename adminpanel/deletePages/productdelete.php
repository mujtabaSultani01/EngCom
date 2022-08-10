<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `products` WHERE id=$getID",$con);
	header("location:../A_Products.php");


?>