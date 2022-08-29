<?php
session_start();
 
  if (!isset($_SESSION['adobeFlashCcloginAsTeacher'])) {
      header("location:../../adminpanel/login/tlogin.php");
  }
?>

<!DOCTYPE html>
<html>
 <?php

    include '../layout/head.php';

 ?>
 <style type="text/css">
#st{
    color: brown;
}
#profile{
            border-radius: 30px;
        }
 </style>
<body>

    <?php  
                    include '../../adminpanel/ConPage.php';
                    $userimage=$_SESSION['adobeFlashCcloginAsTeacher'];
                    $qu=mysql_query("SELECT tid FROM `teacher` WHERE image='$userimage'" ,$con);
                    $trow=mysql_fetch_assoc($qu);
                    $tid=$trow["tid"];


                    ?>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">EngCom</a>
            </div>
            <!-- /.navbar-header -->
            <?php
            include '../../adminpanel/ConPage.php';
            $qunoti=mysql_query("SELECT COUNT(message) as total FROM `admin_teacher_msg` WHERE see_no='1' and (side='admin' AND classname='adobe_flash_cc2016')",$con);
            $rows=mysql_fetch_assoc($qunoti);
            $rowCount=$rows["total"];
            ?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter" style="background-color:red;"><?php echo $rowCount ?></span>
                    </a>
                     <?php
            $qnot=mysql_query("SELECT * FROM `admin_teacher_msg` as atmsg, users as us WHERE atmsg.ad_id=us.uid AND (atmsg.side='admin' AND atmsg.classname='adobe_flash_cc2016')",$con);
            $row=mysql_fetch_assoc($qnot);
            $admin_id=$row["uid"];
            $admin_image=$row["image"];
            ?>
                       
                    <ul class="dropdown-menu dropdown-messages">
                        <?php do{ ?>
                      <?php if ($row["see_no"]=='1') { ?>
                      <li style="background-color:#D8BFD8;">
                            <a href="../layout/messages/admin_teacher_msg.php?aid=<?php echo $row['uid'] ?> & timage=<?php echo $row['image'] ?> & tid=<?php echo $tid ?> & clname=adobe_flash_cc2016">
                                <div>
                                    <strong><?php echo $row["name"]; ?></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div><?php echo $row["message"]; ?></div>
                            </a>
                        </li>
                        <?php }else {?>
                        <li>
                            <a href="../layout/messages/admin_teacher_msg.php?aid=<?php echo $row['uid'] ?> & timage=<?php echo $row['image'] ?> & tid=<?php echo $tid ?> & clname=adobe_flash_cc2016">
                                <div>
                                    <strong><?php echo $row["name"]; ?></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div><?php echo $row["message"]; ?></div>
                            </a>
                        </li>
                        <?php }?>
                        <?php }while($row=mysql_fetch_assoc($qnot));?>
                            
                            <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                 <!-- <strong>Read All Messages</strong> -->
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php
                                
       
                            echo "<img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/$userimage'>";
                           ?>
                        <!-- <i class="fa fa-user fa-fw"></i> -->  <!-- <i class="fa fa-caret-down"></i> -->
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="user-profile.php?tid=<?php echo $tid ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../layout/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        <?php

        include '../Side_bar/stepToother.php';

     ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><b id="st">adobe_flash_cc2016</b> Class Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:hsla(290,60%,70%,0.3)">
                            Schedule Form
                            <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-me box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form  method="POST" action="">
                                        <div class="form-group">
                                            <label> Day </label>
                                            <select class="form-control" name="day">
                                                <option>Saturday</option>
                                                <option>Sunday</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                            </select>   
                                            
                                        </div>    
                                        <div class="form-group">
                                            <label> IssuesToBeCover </label>
                                            <textarea class="form-control" rows="3" name="issues"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label> Date </label>
                                            <input class="form-control" placeholder="Enter text" type="date" name="date">
                                        </div> 
                                        <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div>    
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["day"])){

          $day=$_POST["day"];
          $issues=$_POST["issues"];
          $date=$_POST["date"];
          $classname=$_POST["classname"];
        
          if ( $day =="" || $issues =="" || $date =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `schedule` (`issue`, `day`, `date`, `classname`) 
            VALUES ('$issues', '$day', '$date', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:hsla(120,60%,70%,0.3)">
                            Teacher Instructions
                          <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-ma">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-ma box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">   
                                        <div class="form-group">
                                            <label> Body </label>
                                            <textarea placeholder="Type Your Idea..." class="form-control" rows="3" name="body"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label> Date </label>
                                            <input class="form-control" placeholder="Enter text" type="date" name="mydate">
                                        </div>  
                                        <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div>   
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                  <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["mydate"])){

          $body=$_POST["body"];
          $mydate=$_POST["mydate"];
          $classname=$_POST["classname"];
        
          if ($body =="" || $mydate =="" || $classname =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `tinstruction` (`body`, `date`, `classname`) 
            VALUES ('$body', '$mydate', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Lessons
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mb">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mb box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">  
                                        <div class="form-group">
                                            <label> Type </label>
                                            <select class="form-control" name="title">
                                                <option>Unit</option>
                                                <option>Vocabulary</option>
                                                <option>Grammar</option>
                                                <option>Idioms</option>
                                                <option>News</option>
                                                <option>Video</option>
                                                
                                            </select>   
                                            
                                        </div>  
                                        <div class="form-group">
                                            <label> Upload Video </label>
                                            <input class="form-control" type="file" name="file">
                                        </div> 
                                            <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div> 
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                             <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["title"])){

          $title=$_POST["title"];
          $file=$_POST["file"];
          $classname=$_POST["classname"];
          if ($title =="" || $file =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `lessons` (`title`, `file`, `classname`) 
            VALUES ('$title', '$file', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Documents
                       <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mc">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mc box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">     
                                        <div class="form-group">
                                            <label> Text </label>
                                            <textarea placeholder="Type Your ..." class="form-control" rows="3" name="bodytext"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label> Touch File </label>
                                            <input class="form-control" type="file" name="file">
                                        </div>
                                        <div class="form-group">
                                            <label> Lesson No </label>
                                            <select class="form-control" name="lessonid">
                                               <?php
                                        $record=
                                        mysql_query("SELECT * FROM `lessons` WHERE `classname`='adobe_flash_cc2016' ",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                      <?php do{ ?>
                                                  <option><?php echo $rows["lid"]; ?></option>
                                        <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                         
                                        <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                              <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["bodytext"])){

          $body=$_POST["bodytext"];
          $fi=$_POST["file"];
          $lessonid=$_POST["lessonid"];
          $classname=$_POST["classname"];

          
        
          if ($body =="" || $fi =="" || $lessonid =="" || $classname =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {

          // $file=$_FILES["file"];
          // move_uploaded_file($file["tmp_name"], "\EngCom\Sadminpanel\Videos/" .$file["name"]);

            $query="INSERT INTO `documents` (`body`, `file`, `lessonid`, `classname`) 
            VALUES ('$body', '$fi', '$lessonid', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
            <!-- /.row -->
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Marks Form
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-ssd">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-ssd box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">  
                                         <div class="form-group">
                                            <label> Name </label>
                                            <select class="form-control" name="name">
                                               <?php
                                        $record=
                                        mysql_query("SELECT st.name from student as st, attend as at WHERE st.st_id=at.stid AND at.clname='adobe_flash_cc2016'",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                      <?php do{ ?>
                                                  <option><?php echo $rows["name"]; ?></option>
                                                  <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                         <div class="form-group">
                                            <label> F/name </label>
                                            <select class="form-control" name="fname">
                                    <?php
                                        $record=
                                        mysql_query("SELECT st.fname from student as st, attend as at WHERE st.st_id=at.stid AND at.clname='adobe_flash_cc2016'",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                                 <?php do{ ?>
                                                  <option><?php echo $rows["fname"]; ?></option>
                                        <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                        <div class="form-group">
                                            <label> Test Name </label>
                                            <input class="form-control" type="text" name="testname">
                                        </div>
                                         <div class="form-group">
                                            <label> Marks </label>
                                            <input class="form-control" type="number" name="marks">
                                        </div>
                                            <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                                  <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["testname"])){

          $name=$_POST["name"];
          $fname=$_POST["fname"];
          $testname=$_POST["testname"];
          $marks=$_POST["marks"];
          $classname=$_POST["classname"];
        
          if ($name =="" || $fname =="" || $classname =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `stu_marks` (`stu_name`, `stu_Fname`, `test_name`,`marks`, `classname`) 
            VALUES ('$name', '$fname', '$testname','$marks', '$classname');";
          mysql_query($query,$con);

          $query="INSERT INTO `marks_record` (`stu_name`, `stu_fname`, `test_name`,`marks`, `classname`) 
            VALUES ('$name', '$fname', '$testname','$marks', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Extra Tool
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mf">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mf box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">   
                                        <div class="form-group">
                                            <label> Title </label>
                                            <input class="form-control" type="text" name="refetitle">
                                        </div>
                                        <div class="form-group">
                                            <label> Touch File </label>
                                            <input class="form-control" type="file" name="file">
                                        </div>
                                        <div class="form-group">
                                            <label> References </label>
                                            <textarea name="refe" placeholder="References go here ..." class="form-control" rows="2" ></textarea>
                                        </div> 
                                           <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div> 
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                                      <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["refetitle"])){

          $title=$_POST["refetitle"];
          $file=$_POST["file"];
          $refe=$_POST["refe"];
          $classname=$_POST["classname"];
        
          if ($title =="" || $classname =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `extool` (`title`, `file`, `reference`, `classname`) 
            VALUES ('$title', '$file', '$refe', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
       <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Images
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mg">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mg box-content collapse out">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">    
                                        <div class="form-group">
                                            <label> Upload Image for the class </label>
                                            <input class="form-control" type="file" name="imgfile">
                                        </div> 
                                            <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                                        </div> 
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
       <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["imgfile"])){

          $file=$_POST["imgfile"];
          $classname=$_POST["classname"];
          if ($file =="" ) {
            echo "<span style='color:red;'>please fill image field!!!</span>";
          }
          else
          {
            $query="INSERT INTO `gallery` (`image`, `classname`) 
            VALUES ('$file', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><b id="st">adobe_flash_cc2016</b> Class Stored Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Schedule For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mh">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mh box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Day</th>
                                            <th>Issue To be Cover</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      include '../../adminpanel/ConPage.php';
                                      $recordSet=
                                      mysql_query("SELECT * FROM `schedule` WHERE classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["day"]; ?></td>
                                            <td><?php echo $row["issue"]; ?></td>
                                            <td class="center"><?php echo $row["date"]; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/schedule.php?ID=<?php echo $row["schid"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?ID=<?php echo $row["schid"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Teacher_Instruction For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mi">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mi box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Body</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `tinstruction` WHERE classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["body"]; ?></td>
                                            <td class="center"><?php echo $row["date"]; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/tinstruction.php?ID=<?php echo $row["id"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?TID=<?php echo $row["id"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lessons_Collection For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mj">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mj box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type</th>
                                            <th>Videos</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `lessons` WHERE classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["lid"]; ?></td>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td class="center">

                                              <video controls width="300" height="200">
                                               <source src="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>" type="video/mp4" >
                                                </video>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/lesson.php?ID=<?php echo $row["lid"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?LID=<?php echo $row["lid"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Documents For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mk">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mk box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Text</th>
                                            <th>Document File</th>
                                            <th>Lesson No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `documents` WHERE classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["did"]; ?></td>
                                            <td><?php echo $row["body"]; ?></td>
                                            <td><a href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a> </td>
                                            <td class="center"><?php echo $row["lessonid"]; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/documents.php?ID=<?php echo $row["did"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?DID=<?php echo $row["did"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Students_Marks For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-ml">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-ml box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                      $records=
                                      mysql_query("SELECT DISTINCT test_name FROM `stu_marks` WHERE classname='adobe_flash_cc2016'",$con);
                                      $rows=mysql_fetch_assoc($records);
                                    ?>
                                   <?php do{ ?>
                                 <?php  $testname=$rows["test_name"];?>

                                <h3 style="color:#48D1CC"><b><?php echo $rows["test_name"]; ?></b></h3>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>F/name</th>
                                            <th>Marks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT stu_name,stu_Fname,marks,classname,ma_id FROM `stu_marks` WHERE classname='adobe_flash_cc2016' AND test_name='$testname'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                   <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["stu_name"]; ?></td>
                                            <td><?php echo $row["stu_Fname"]; ?></td>
                                            <td><?php echo $row["marks"]; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/marks.php?ID=<?php echo $row["ma_id"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?MID=<?php echo $row["ma_id"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                                <?php }while($rows=mysql_fetch_assoc($records));?>

                                <h3 style="color:#48D1CC"><b>Final Result</b></h3>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>F/name</th>
                                            <th>Marks (100%)</th>
                                            <th>Grade</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $re=
                                      mysql_query("SELECT stu_name,stu_Fname,SUM(marks) as total FROM `stu_marks` WHERE classname='adobe_flash_cc2016' GROUP BY stu_name ORDER BY total DESC",$con);
                                      $ro=mysql_fetch_assoc($re);
                                      $grade=0;
                                    ?>
                                   <?php 
                                   do{ 
                                    $grade=$grade+1;
                                    ?>

                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $ro["stu_name"]; ?></td>
                                            <td><?php echo $ro["stu_Fname"]; ?></td>
                                            <td><?php echo $ro["total"]; ?></td>
                                          <?php  if ( $ro["total"]>59) {?>
                                              
                                            <td style="color:#0000CD;"><?php echo "grade_".$grade ?></td>
                                            <?php } else{?>

                                            <td style="color:red;"><?php echo "Failed"; ?></td>
                                            <?php }?>
                                            
                                             
                                        </tr>
                                    </tbody>
                                    <?php }while($ro=mysql_fetch_assoc($re));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Extra_Tool For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mm">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mm box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Attached File</th>
                                            <th>References</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `extool` WHERE classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["eid"]; ?></td>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td><a href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a> </td>
                                            <td class="center"><?php echo $row["reference"]; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/extratool.php?ID=<?php echo $row["eid"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?EID=<?php echo $row["eid"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Stored Images For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mn">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        </div>
                        <div class="box-hide-mn box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `gallery` WHERE classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center">
                                              <img src="../../public/images/gallary/<?php echo $row["image"]; ?>" width="200" height="120">
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="updatePages/stepOneUpdatePages/gallary.php?imgID=<?php echo $row["id"]; ?> & clName=<?php echo $row["classname"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?imgID=<?php echo $row["id"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

                <?php
            include '../../adminpanel/ConPage.php';
            $qunoti=mysql_query("SELECT COUNT(type) as total FROM `notification` WHERE row_count='1' AND (classname='adobe_flash_cc2016' AND type='attendence')",$con);
            $rows=mysql_fetch_assoc($qunoti);
            $rowCount=$rows["total"];
            //$rowNu=$rows["row_count"];
            ?>



             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Attendence For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mo">
                            <span class="badge badge-danger badge-counter" style="background-color:red;"><?php if($rowCount > 0 ){ echo $rowCount; } ?></span>
                        </button>
                        </div>
                        <div class="box-hide-mo box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT DISTINCT at.Sname, at.Simage, at.Date, no.row_count,no.nid FROM `attendence` as at, notification as no WHERE no.fid=at.student_id AND (at.classname='adobe_flash_cc2016' AND no.type='attendence')",$con);  
                                      $row=mysql_fetch_assoc($recordSet);

                                    ?>
                                    <?php do{ 

                                        $qu=mysql_query("SELECT nid from notification WHERE ")
                                        ?>

                                    <tbody>
                                        <?php if ($row["row_count"]=='1') { ?>
                                        <tr class="odd gradeX">
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><?php echo $row["Sname"]; ?></a> </td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><img style="width:50px; height:50px;" src="../../public/images/services/<?php echo $row["Simage"]; ?>" alt="" id="profile"></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><?php echo $row["Date"]; ?></a> </td>
                                            <td style="background-color:#B0C4DE;">
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?AID=<?php echo $row["Sname"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }else {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["Sname"]; ?></td>
                                            <td><img style="width:50px; height:50px;" src="../../public/images/services/<?php echo $row["Simage"]; ?>" alt="" id="profile"></td>
                                            <td><?php echo $row["Date"]; ?></td>
                                            <td>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?AID=<?php echo $row["Sname"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

              <?php
            include '../../adminpanel/ConPage.php';
            $qunoti=mysql_query("SELECT COUNT(type) as total, row_count FROM `notification` WHERE row_count='1' AND (classname='adobe_flash_cc2016' AND type='homework')",$con);
            $rows=mysql_fetch_assoc($qunoti);
            $roCount=$rows["total"];
            //$rowNu=$rows["row_count"];
            ?>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Submitted Home Work For <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mp">
                            <span class="badge badge-danger badge-counter" style="background-color:red;"><?php if($roCount > 0 ){ echo $roCount; } ?></span>
                        </button>
                        </div>
                        <div class="box-hide-mp box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>F/name</th>
                                            <th>Body</th>
                                            <th>File</th>
                                            <th>Voice</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `homework` as ho,`notification` as no WHERE ho.hid=no.fid AND ho.classname='adobe_flash_cc2016'",$con);
                                      $row=mysql_fetch_assoc($recordSet);

                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                      <?php if ($row["row_count"]=='1') { ?>
                                           <tr class="odd gradeX">
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <?php echo $row["name"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <?php echo $row["fname"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <?php echo $row["body"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <a href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <?php echo $row["voice"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <?php echo $row["Date"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;">
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?HID=<?php echo $row["name"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                      <?php }else {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["body"]; ?></td>
                                            <td><a href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a></td>
                                            <td><?php echo $row["voice"]; ?></td>
                                            <td><?php echo $row["Date"]; ?></td>
                                            <td>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?HID=<?php echo $row["name"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
        <?php
            include '../../adminpanel/ConPage.php';
            $qunoti=mysql_query("SELECT COUNT(type) as total, row_count FROM `notification` WHERE (row_count='1' AND classname='adobe_flash_cc2016') AND (type='public' OR type='private')",$con);
            $rows=mysql_fetch_assoc($qunoti);
            $rCount=$rows["total"];
            //$rowNu=$rows["row_count"];
            ?>

                        <div class="panel-heading">
                            Students Messages <b id="st">adobe_flash_cc2016</b> Class
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mq">
                            <span class="badge badge-danger badge-counter" style="background-color:red;"><?php if($rCount > 0 ){ echo $rCount; } ?></span>
                        </button>
                        </div>
                        <div class="box-hide-mq box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                              <h3 style="color:#FF69B4"><b>Public Messages For the Class</b></h3>
                      <?php   //SELECT * FROM `smessage` as m,`student` as st WHERE m.password=st.password AND st.uname='$username'
                        $recordSet=
                         mysql_query("SELECT * FROM `smessage`as me, notification as no WHERE me.id=no.fid AND (no.type='public' AND me.classname='adobe_flash_cc2016')",$con);
                        $row=mysql_fetch_assoc($recordSet);
                    ?>
                    <?php do{ ?><br>
                    <?php if ($row["row_count"]=='1') { ?>
                     <label style="color:brown;background-color:hsla(120,100%,75%,0.3); border-radius: 10px; width:385px;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <img src='../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["body"]; ?></a>
                      <a class="btn btn-danger" href="deletePages/stepOneDelete.php?PriID=<?php echo $row["body"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a><br></label>
                     
                     <?php }else {?>
                        <label style="color:brown;border-radius: 10px; width:385px;"> <img src='../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["body"]; ?>
                      <a class="btn btn-danger" href="deletePages/stepOneDelete.php?PriID=<?php echo $row["body"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a><br></label>
                     <?php }?>
                     <?php }while($row=mysql_fetch_assoc($recordSet));?><br>
                            

                            <?php
             
         include '../../adminpanel/ConPage.php';
         

         if(isset($_POST["pubody"])){
            
          $body=$_POST["pubody"];
          $classname=$_POST["classname"];    
          $type=$_POST["public"];    
          if ($body =="" ) {
            echo "<span style='color:red;'> Fill the body field !!!</span>";
          }
          else
          {
            $query="INSERT INTO `smessage` (`body`,`image`, `type`, `classname`) 
            VALUES ('$body','$userimage','$type', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
        }
        }

?>

                      <form class="form-inline" method="post" action="">
                            <br>
                            <div class="form-group" style="display:none">
                     <label> Class Name </label>
                    <input class="form-control" type="text" value="adobe_flash_cc2016" name="classname">
                    </div>
                    <div class="form-group" style="display:none">
                     <label> Message Type </label>
                    <input class="form-control" type="text" value="public" name="public">
                    </div>
                            <div class="box-footer">    
                                <input type="text" name="pubody" style="width:300px; height:35px;" placeholder="type message..." >
                                <input type="submit" name="submit" value="Send" style="width:80px;" class="btn btn-primary">
                                
                            </div><br>
                        </form>


                            <h3 style="color:#FF69B4"><b>Private Messages For the Class</b></h3>
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>Body</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `smessage`as me, notification as no WHERE me.id=no.fid AND (no.type='private' AND me.classname='adobe_flash_cc2016')",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <?php if ($row["row_count"]=='1') { ?>
                                        <tr class="odd gradeX">
                                            <td>
                                              
                                              <label style="color:brown;background-color:hsla(120,100%,75%,0.3); border-radius: 10px; width:380px;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"> <img src='../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["body"]; ?></a><br></label>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?MeID=<?php echo $row["body"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                                <a class="btn btn-success" href="ReplayMessage/PrivateMsgReplay.php?MeID=<?php echo $row["password"]; ?> & timg=<?php echo $userimage?>" class="icon_check_alt2">Replay</a>
                                            </td>
                                        </tr>
                                        <?php }else {?>
                                        <tr class="odd gradeX">
                                            <td>
                                              
                                              <label style="color:brown; border-radius: 10px; width:380px;"> <img src='../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'><?php echo $row["body"]; ?><br></label>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" href="deletePages/stepOneDelete.php?MeID=<?php echo $row["body"]; ?> & Clname=adobe_flash_cc2016.php"  class="icon_check_alt2">Delete</a>
                                                <a class="btn btn-success" href="ReplayMessage/PrivateMsgReplay.php?MeID=<?php echo $row["password"]; ?> & timg=<?php echo $userimage?>" class="icon_check_alt2">Replay</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>

                                <h3 style="color:#5F9EA0"><b>Delete All Those Messages Which Sent Among Students</b></h3>
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Click Button</th>
                                        </tr>
                                    </thead>
                                     <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `smessage` WHERE classname='adobe_flash_cc2016' and type='betstu'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>
                                                <a class="btn btn-danger" href="deletePages/stepOne-stu-msg-delete.php?ClNaID=<?php echo $row["classname"];?> & Clname=adobe_flash_cc2016.php" class="icon_check_alt2">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <?php
            include '../../adminpanel/ConPage.php';
            $qunoti=mysql_query("SELECT COUNT(type) as total, row_count FROM `notification` WHERE row_count='1' AND (classname='adobe_flash_cc2016' AND type='stAccount')",$con);
            $rows=mysql_fetch_assoc($qunoti);
            $rowsCount=$rows["total"];
            //$rowNu=$rows["row_count"];
            ?>
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <b id="st">adobe_flash_cc2016</b> Class Students
                       <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-mr">
                            <span class="badge badge-danger badge-counter" style="background-color:red;"><?php if($rowsCount > 0 ){ echo $rowsCount; } ?></span>
                        </button>
                        </div>
                        <div class="box-hide-mr box-content collapse out">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Body</th>
                                            <th>Name</th>
                                            <th>F/name</th>
                                            <th>Email Address</th>
                                        </tr>
                                    </thead>
                             <?php
                             include '../../adminpanel/ConPage.php';
                             $recordSet=
                             mysql_query("SELECT * FROM `student` as stu, `attend` as att, notification as no WHERE (stu.st_id=no.fid AND no.type='stAccount') AND (stu.st_id=att.stid AND att.clname='adobe_flash_cc2016') ",$con);
                             $row=mysql_fetch_assoc($recordSet);


                             // $que=mysql_query("SELECT smg.image FROM `smessage` as smg,`student` as stu WHERE stu.st_id=smg.sid AND smg.image IN( SELECT stu.image FROM `student` as stu, `attend` as att WHERE stu.st_id=att.stid AND att.clname='adobe_flash_cc2016')");
                             // $rows=mysql_fetch_assoc($que);
                              ?>
                            <?php do{ ?>
                                    <tbody>
                                         <?php if ($row["row_count"]=='1') { ?>
                                        <tr class="odd gradeX">
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><img style="width:50px; height:50px;" src="../../public/images/services/<?php echo $row["image"]; ?>" alt="" id="profile"></a> </td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><?php echo $row["name"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><?php echo $row["fname"]; ?></a></td>
                                            <td style="background-color:#B0C4DE;"><a href="notificationUpdate.php?notf=<?php echo $row["nid"] ?> & clname=adobe_flash_cc2016.php"><?php echo $row["email"]; ?></a></td>
                                            
                                        </tr>
                                           <?php }else {?>
                                            <tr class="odd gradeX">
                                            <td><img style="width:50px; height:50px;" src="../../public/images/services/<?php echo $row["image"]; ?>" alt="" id="profile"> </td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            
                                        </tr>
                                         <?php }?>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->
        </div>
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../design/js/jquery-1.10.2.js"></script>
    <script src="../design/js/bootstrap.min.js"></script>
    <script src="../design/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../design/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
