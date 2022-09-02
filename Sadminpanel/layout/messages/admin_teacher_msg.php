<?php
             
         include '../../../adminpanel/ConPage.php';  

          $gettID=$_GET["aid"];
          $getteacherID=$_GET["tid"];
          $gettimg=$_GET["timage"];
          $getclname=$_GET["clname"];
          mysql_query("UPDATE `admin_teacher_msg` SET `see_no`='0' WHERE `ad_id` = '$gettID' AND side='admin'",$con);

          $qnot=mysql_query("SELECT tid, image FROM `teacher` WHERE tid='$getteacherID'",$con);
            $row=mysql_fetch_assoc($qnot);
            $teacher_id=$row["tid"];
            $teacher_image=$row["image"];
          
         if(isset($_POST["mebody"])){
            
          $message=$_POST["mebody"];
          $side=$_POST["side"];    
          if ($message =="" ) {
            echo "<span style='color:red;'> Fill the body field !!!</span>";
          }
          else
          {
           
        
            $query="INSERT INTO `admin_teacher_msg`(`ad_id`,`te_id`, `message`,`see_no`,`classname`,`side`, `image`) VALUES ('$gettID','$getteacherID','$message','1','$getclname','$side', '$teacher_image');";
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
                          $query=mysql_query("SELECT * FROM `admin_teacher_msg` WHERE (ad_id='$gettID' AND te_id='$getteacherID') OR (ad_id='0' AND te_id='$getteacherID')");
                          $row=mysql_fetch_assoc($query);
                          ?>
                    <div class="../form-group" style="display:none">
                     <label> Side </label>
                    <input class="form-control" type="text" value="teacher" name="side">
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
