<?php
             
         include '../../../adminpanel/ConPage.php';  

          $gettID=$_GET["tid"];
          $gettimg=$_GET["timage"];
          $getAdminID=$_GET["uid"];
          mysql_query("UPDATE `admin_teacher_msg` SET `see_no`='0' WHERE `te_id` = '$gettID' AND side='teacher'",$con);

          $qnot=mysql_query("SELECT image FROM `users` WHERE uid='$getAdminID'",$con);
            $row=mysql_fetch_assoc($qnot);
            $admin_image=$row["image"];

            $qclname=mysql_query("SELECT * FROM `teacher_attend` WHERE t_id='$gettID'",$con);
            $clnamerow=mysql_fetch_assoc($qclname);
            $clname=$clnamerow["clname"];

          
         if(isset($_POST["mebody"])){
            
          $message=$_POST["mebody"];
          $side=$_POST["side"];    
          if ($message =="" ) {
            echo "<span style='color:red;'> Fill the body field !!!</span>";
          }
          else
          {
           
        
            $query="INSERT INTO `admin_teacher_msg`(`ad_id`,`te_id`, `message`,`see_no`,`classname`,`side`, `image`) VALUES ('$getAdminID','$gettID','$message','1','$clname','$side', '$admin_image');";
            mysql_query($query,$con);
                     //header("location:index.php");

        }
        }

?>
<html>
<head>

    <style type="text/css">
       
       *{
        margin: 0px;
        padding: 0px;
      }

       #main{
          width: 355px;
          margin: 20px auto;
          border: 1px solid black;
          height: 550px;
          margin: 24px auto;
       }
       .box-footer{
        position: center;
        width: 100%;
        border: 1px solid blue;
        height: 468px;
       }


    </style>
</head>

<body style="background-color:#C0C0C0;">

  <div id="main">
  <h2 style="text-align:center;">Message Box</h2>
 <form class="../form-inline" method="post" action="">
                            <br>
                          <?php
                          $query=mysql_query("SELECT * FROM `admin_teacher_msg` WHERE te_id='$gettID'");
                          $row=mysql_fetch_assoc($query);
                          ?>
                    <div class="../form-group" style="display:none">
                     <label> Side </label>
                    <input class="form-control" type="text" value="admin" name="side">
                    </div>
                    
                            <div class="box-footer">
                             <?php do{ ?> 
                                <p style="background-color:cyan; margine-top:5px; border-radius: 10px; width:355px;"><img src='../../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["message"]; ?></p> 
                            <?php }while($row=mysql_fetch_assoc($query));?>
                          </div>
                             
                            <input type="text" name="mebody" style="width:271px; height:35px;" placeholder="type message..." > 
                                <input style="background-color:cyan;width:80px; height:35px;border-rediuce:10px;" type="submit" name="submit" value="Send" class="btn btn-primary">
                            
                            <br>
                           
                        </form>
                        
                        </div>
</body>

        </html>
