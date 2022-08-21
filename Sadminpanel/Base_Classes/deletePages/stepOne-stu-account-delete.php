<?php
	
	include '../../../adminpanel/ConPage.php';

	 $getID=$_GET["StID"];
	 $getClName=$_GET["Clname"];
	//$getClName="step-1.php";


	 mysql_query("DELETE FROM `attend` WHERE `stid`='$getID'",$con);

	 mysql_query("DELETE FROM `student` WHERE `st_id`='$getID'",$con);

	header("location:../$getClName");

?>
