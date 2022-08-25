<?php
        include '../../adminpanel/ConPage.php';

            $rowC=$_GET["notf"];
            $rowCl=$_GET["clname"];
            mysql_query("UPDATE `notification` SET `row_count`='0' WHERE `nid` = '$rowC'",$con);
            header("location:$rowCl");
               
                 ?>