<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `employees` WHERE id=$getID",$con);
	header("location:../A_Employees.php");


?>