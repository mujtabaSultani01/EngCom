<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `favorites` WHERE id=$getID",$con);
	header("location:../A_favorites.php");


?>