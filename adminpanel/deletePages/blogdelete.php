<?php
	
	include '../ConPage.php';
	$getID=$_GET["ID"];
	mysql_query("DELETE FROM `blog` WHERE id=$getID",$con);
	header("location:../A_blog.php");

?>