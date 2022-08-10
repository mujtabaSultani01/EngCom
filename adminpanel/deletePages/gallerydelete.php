<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `gallery` WHERE id=$getID",$con);
	header("location:../A_Gallery.php");


?>