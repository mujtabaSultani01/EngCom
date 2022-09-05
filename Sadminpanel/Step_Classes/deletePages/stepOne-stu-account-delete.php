<?php
	
	include '../../../adminpanel/ConPage.php';

	 $getID=$_GET["StID"];
	 $getClName=$_GET["Clname"];
	 $getstimage=$_GET["Stimage"];


	 mysql_query("DELETE FROM `attend` WHERE `stid`='$getID'",$con);

	 mysql_query("DELETE FROM `student` WHERE `st_id`='$getID'",$con);

	 mysql_query("DELETE from `smessage` WHERE `image`='$getstimage'");

	header("location:../$getClName");

?>
