<?php
	
	include '../../adminpanel/ConPage.php';

     $getClName=$_GET["Clname"];
	 $gettDID=$_GET["tDID"];
	 $getToID=$_GET["toID"];
	 $getGaID=$_GET["GaID"];
	 $getpaID=$_GET["paID"];
	 $getuID=$_GET["uID"];
	 $classname=$_GET["classname"];

    mysql_query("DELETE FROM `teacher_attend` WHERE t_id=$gettDID AND clname='$classname'",$con);
	mysql_query("DELETE FROM `teacher` WHERE tid=$gettDID",$con);
	header("location:../$getClName");

	mysql_query("DELETE FROM `centerTopper` WHERE toid=$getToID",$con);
	header("location:$getClName");

	mysql_query("DELETE FROM `a_gallery` WHERE gid=$getGaID",$con);
	header("location:$getClName");

	mysql_query("DELETE FROM `payment` WHERE payid=$getpaID",$con);
	header("location:$getClName");

	mysql_query("DELETE FROM `users` WHERE uid=$getuID",$con);
	header("location:$getClName");


?>