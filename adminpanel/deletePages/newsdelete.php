<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `news` WHERE id=$getID",$con);
	header("location:../A_News.php");


?>