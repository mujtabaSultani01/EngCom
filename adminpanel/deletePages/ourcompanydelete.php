<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `courseinfo` WHERE id=$getID",$con);
	header("location:../A_ourCompany.php");


?>