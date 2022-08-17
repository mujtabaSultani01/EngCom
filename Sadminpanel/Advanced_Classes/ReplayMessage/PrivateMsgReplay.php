<?php
             
         include '../../../adminpanel/ConPage.php';

          $getID=$_GET["MeID"];
          
         if(isset($_POST["prbody"])){
            
          $body=$_POST["prbody"];
          $classname=$_POST["classname"];    
          $type=$_POST["private"];    
          if ($body =="" ) {
            echo "<span style='color:red;'> Fill the body field !!!</span>";
          }
          else
          {
            $query="INSERT INTO `smessage` (`body`, `type`, `classname`, `password`) 
            VALUES ('$body','$type', '$classname', '$getID');";
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
          width: 400px;
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

<body style="background-color:#5F9EA0;">

  <div id="main">
  <h2 style="text-align:center;">Message Replaying</h2>
 <form class="../form-inline" method="post" action="">
                            <br>
                             <?php

                          $query=mysql_query("SELECT * FROM `smessage` WHERE password='$getID'");
                          $row=mysql_fetch_assoc($query);

                  
                          ?>
                            <div class="../form-group" style="display:none">
                     <label> Class Name </label>
                    <input class="../form-control" type="text" value="<?php echo $row["classname"]; ?>" name="classname">
                    </div>
                    <div class="../form-group" style="display:none">
                     <label> Message Type </label>
                    <input class="form-control" type="text" value="private" name="private">
                    </div>
                    
                            <div class="box-footer">
                             <?php do{ ?> 
                                <p style="background-color:cyan; margine-top:5px; border-radius: 10px; width:385px;"><img src='../../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["body"]; ?></p> 
                            <?php }while($row=mysql_fetch_assoc($query));?>
                          </div>
                             
                            <input type="text" name="prbody" style="width:316px; height:35px;" placeholder="type message..." >
                                <input style="background-color:cyan;width:80px; height:35px;border-rediuce:10px;" type="submit" name="submit" value="Send" class="btn btn-primary">
                                
                            <br>
                        </form>
                        
                        </div>
</body>

        </html>
