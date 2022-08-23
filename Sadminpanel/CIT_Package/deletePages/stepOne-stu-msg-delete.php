<?php
	
	include '../../../adminpanel/ConPage.php';

	 $getID=$_GET["ClNaID"]; 
	 $getClName=$_GET["Clname"]; 

	mysql_query("DELETE FROM `smessage` WHERE `type`='betstu' AND `classname`='$getID'",$con);
	header("location:../$getClName");
?>