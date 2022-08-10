<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `services` WHERE id=$getID",$con);
	header("location:../A_Services.php");

?>