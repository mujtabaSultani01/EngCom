<?php

	$con = mysql_connect("localhost","root","");
	mysql_select_db("engcomdb",$con);

	// if ($con) {
	// 	echo "connected...."; 
	// }
	// else
	// 	echo "not connected....";

	// $test = mysqli_query($con, "SELECT * FROM `users`");
	// $te = mysql_fetch_assoc($test);
	// echo $te["id"];

 //     $query="SELECT `email` FROM `users` WHERE `id`= 1 ";
	// $result= mysql_query($query) or die(mysql_error());
	//   $dis = mysql_fetch_assoc($result);
	//     echo $dis["email"];
 
?>