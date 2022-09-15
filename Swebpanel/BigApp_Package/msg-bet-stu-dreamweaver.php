<?php
        session_start();
        include '../../../adminpanel/ConPage.php';
        $studentid=$_SESSION['dreamweaverlogin'];
        $q=mysql_query("SELECT * FROM `student` WHERE st_id=$studentid",$con);
        $row=mysql_fetch_assoc($q);
        $userimage=$row["image"];


         $getID=$_GET["stid"];

         if(isset($_POST["betstubody"])){
            
          $body=$_POST["betstubody"];
          $classname=$_POST["classname"];    
          $type=$_POST["betstu"];
          $file=$_POST["file"];    
          if ($body =="" ) {
            echo "<span style='color:red;'> Fill the body field !!!</span>";
          }
          else
          {
            $query="INSERT INTO `smessage` (`body`,`image`,`tomsgimage`, `type`, `classname`, `file`) 
            VALUES ('$body','$userimage','$getID','$type', '$classname', '$file');";
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
          width: 340px;
          margin: 20px auto;
          border: 1px solid black;
          height: 560px;
          margin: 24px auto;
       }
       .box-footer{
        position: center;
        width: 100%;
        border: 1px solid blue;
        height: 443px;
       }


    </style>
</head>

<body style="background-color:#C0C0C0;">

  <div id="main">
  <h2 style="text-align:center;">Message Box</h2>
 <form class="../form-inline" method="post" action="">
                            <br>
                            <div class="../form-group" style="display:none">
                     <label> Class Name </label>
                    <input class="../form-control" type="text" value="dreamweaver_cc2018" name="classname">
                    </div>
                    <div class="../form-group" style="display:none">
                     <label> Message Type </label>
                    <input class="form-control" type="text" value="betstu" name="betstu">
                    </div>
                    <?php
                        //$query=mysql_query("SELECT * FROM `smessage` as smg WHERE smg.type='betstu' AND (smg.image='$getID' OR smg.image='$userimage')");  
                          $query=mysql_query("SELECT * FROM `smessage` as smg WHERE smg.type='betstu' AND ((smg.tomsgimage='$userimage' AND smg.image='$getID') OR (smg.tomsgimage='$getID' AND smg.image='$userimage')) ");
                          $row=mysql_fetch_assoc($query);
                  
                          ?>
                    
                            <div class="box-footer">
                             <?php do{ ?> 
                                <p style="background-color:cyan; margine-top:5px; border-radius: 20px; width:340px;"><img src='../../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["body"]; ?>: <b><strong><i><a href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a></i></strong></b></p><hr> 
                            <?php }while($row=mysql_fetch_assoc($query));?>
                          </div>
                             
                            <input type="text" name="betstubody" style="width:340px; height:35px;" placeholder="type message..." ><input type="file" name="file">
                            <input style="background-color:cyan;width:83px; height:35px;border-rediuce:10px;" type="submit" name="submit" value="Send" class="btn btn-primary">
                                
                            <br>
                        </form>
                        
                        </div>
</body>

        </html>
