<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `messages` WHERE id=$getID",$con);
	header("location:../A_Contact.php");

?>