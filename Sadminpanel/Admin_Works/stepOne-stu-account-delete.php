<?php
	
	include '../../adminpanel/ConPage.php';

	 $getID=$_GET["StID"];
	 $getClName=$_GET["Clname"];
	 $getstimage=$_GET["Stimage"];
	 $classname=$_GET["classname"];


	 mysql_query("DELETE FROM `attend` WHERE `stid`='$getID' AND clname='$classname' ",$con);

	  mysql_query("DELETE from `smessage` WHERE `image`='$getstimage' AND classname='$classname'",$con);

	  mysql_query("DELETE FROM `student` WHERE `st_id`='$getID'",$con);

	  mysql_query("DELETE FROM `notification` WHERE `fid`='$getID'",$con);

	  mysql_query("DELETE FROM `attendence` WHERE `student_id`='$getID'",$con);

	  header("location:$getClName");

?>
