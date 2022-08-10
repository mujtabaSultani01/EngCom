<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `servicepackage` WHERE id=$getID",$con);
	header("location:../A_package.php");

?>