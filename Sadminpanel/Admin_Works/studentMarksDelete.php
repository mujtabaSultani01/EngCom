<?php
	
	include '../../adminpanel/ConPage.php';

     $getClName=$_GET["Clname"];
	 $getstuID=$_GET["uID"];

	mysql_query("DELETE FROM `marks_record` WHERE ma_re_id=$getstuID",$con);
	header("location:$getClName");

	


?>