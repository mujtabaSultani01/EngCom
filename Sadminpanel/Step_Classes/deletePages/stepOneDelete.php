<?php
	
	include '../../../adminpanel/ConPage.php';

    $getClName=$_GET["Clname"];
	$getID=$_GET["ID"];
	$getTID=$_GET["TID"];
	$getLID=$_GET["LID"];
	$getDID=$_GET["DID"];
	$getMID=$_GET["MID"];
	$getEID=$_GET["EID"];
	$getAID=$_GET["AID"];
	$getHID=$_GET["HID"];
	$getEDid=$_GET["EDid"];
	$getMeID=$_GET["MeID"];
	$getPriID=$_GET["PriID"];
	$getimgID=$_GET["imgID"];

    mysql_query("DELETE FROM `schedule` WHERE schid=$getID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `tinstruction` WHERE id=$getTID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `lessons` WHERE lid=$getLID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `documents` WHERE did=$getDID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `stu_marks` WHERE ma_id=$getMID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `extool` WHERE eid=$getEID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `attendence` WHERE `Sname`='$getAID'",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `practice` WHERE `pid`='$getEDid'",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `homework` WHERE `name`='$getHID'",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `smessage` WHERE `body`='$getMeID'",$con);
	header("location:../$getClName");
	
	mysql_query("DELETE FROM `smessage` WHERE `body`='$getPriID'",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `gallery` WHERE `id`='$getimgID'",$con);
	header("location:../$getClName");
?>