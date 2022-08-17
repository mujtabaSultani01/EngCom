<?php
session_start();
 $getID=$_GET["ID"];
 
  if (!isset($_SESSION['loginAsAdmin'])){

      header("location:../adminpanel/login/alogin.php");
  }
?>
<!DOCTYPE html>
<html>
<style type="text/css">
</style>
<?php
 
  include '../layout/head.php';

?>

<body>

   <?php  
                    include '../../adminpanel/ConPage.php';
                    $userimage=$_SESSION['loginAsAdmin'];
                    $qu=mysql_query("SELECT uid FROM `users` WHERE image='$userimage'" ,$con);
                    $trow=mysql_fetch_assoc($qu);
                    $uid=$trow["uid"];
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
                <a class="navbar-brand" href="../index.php">EngCom</a>
            </div>
            <!-- /.navbar-header -->
            <?php
            include '../../adminpanel/ConPage.php';
            $qunoti=mysql_query("SELECT COUNT(message) as total FROM `admin_teacher_msg` WHERE see_no='1' and side='teacher'",$con);
            $rows=mysql_fetch_assoc($qunoti);
            $rowCount=$rows["total"];
            ?>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter" style="background-color:red;"><?php echo $rowCount ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                            <?php
            include '../../adminpanel/ConPage.php';
            $qnot=mysql_query("SELECT * FROM `admin_teacher_msg` as atmsg, teacher as te WHERE atmsg.te_id=te.tid AND atmsg.side='teacher'",$con);
            $row=mysql_fetch_assoc($qnot);
            $teacher_id=$row["te_id"];
            $teacher_image=$row["image"];
            ?>
                       <?php do{ ?>
                      <?php if ($row["see_no"]=='1') { ?>
                        <li style="background-color:#D8BFD8;">
                            <a href="messages/adminToTeacher_msg.php?tid=<?php echo $row['te_id'] ?> & timage=<?php echo $row['image'] ?> & uid=<?php echo $uid ?>">
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
                            <a href="messages/adminToTeacher_msg.php?tid=<?php echo $row['te_id'] ?> & timage=<?php echo $row['image'] ?> & uid=<?php echo $uid ?>">
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
                                <!-- <strong>new msg</strong> -->
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-comment fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                        <?php
                        $recordSet=
                        mysql_query("SELECT * FROM `teacher_attend` as ta, teacher as te WHERE ta.t_id=te.tid ",$con);
                        $row=mysql_fetch_assoc($recordSet);
                     
                      ?>
                      <?php do{ ?>
                            <a href="messages/newAdminMsg.php?uid=<?php echo $uid ?> & clname=<?php echo $row["clname"]; ?>">
                                <div>
                                    <i><img style='width:28px; height:28px; border-radius: 14px;' src='../../public/images/services/<?php echo $row["image"]; ?>'></i> <?php echo $row["name"]; ?>
                                    <span class="pull-right text-muted small"><?php echo $row["clname"]; ?></span>
                                </div>
                            </a>
                            <?php }while($row=mysql_fetch_assoc($recordSet));?>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php
                                

                            echo "<img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/$userimage'>";
                           ?>
                    </a>
                     
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../layout/admin-profile.php?uid=<?php echo $uid ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
            .
     
<style type="text/css">

#side-menu{
    overflow: scroll;
    overflow: vertical;
    width: 250px;
    height: 600px;
}
</style>
            

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="centerTopper.php"><i class="fa fa-dashboard fa-fw"></i> Go Back</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Top Students Update Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        <?php
          $recordSet=
          mysql_query("SELECT * FROM `centerTopper`",$con);
          $row=mysql_fetch_assoc($recordSet);
          ?>
            <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:hsla(290,60%,70%,0.3)">
                            Course Topper Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form  method="POST" action="">
                                        <div class="form-group" style="">
                                            <img style="border-radius: 15px;" src="../../public/images/gallary/<?php echo $row["image"]; ?>" width="60" height="60"><br>
                                            <label>Choose Image</label>
                                            <input class="form-control" type="file" name="image">
                                        </div> 
                                         <div class="form-group" style="">
                                            <label> Name </label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $row["name"]; ?>">
                                        </div>
                                         <div class="form-group" style="">
                                            <label> User Name </label>
                                            <input class="form-control" type="text" name="uname" value="<?php echo $row["uname"]; ?>">
                                        </div>
                                         <div class="form-group" style="">
                                            <label> Score </label>
                                            <input class="form-control" type="text" name="score" value="<?php echo $row["score"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label> Category </label>
                                            <select class="form-control" name="category">
                                                <option>Well Done</option>
                                                <option>Excellent</option>
                                                <option>Very Good</option>
                                            </select>   
                                            
                                        </div> 
                                          
                                         <div class="form-group">
                                            <label> Section </label>
                                            <select class="form-control" name="section">
                                                <option>English</option>
                                                <option>Computer</option>
                                            </select>   
                                            
                                        </div>
                                        <label for="usernamesignup" class="uname"> Class name</label><br>
                                       <select class="form-control" name="classname">
                        <?php
                        $recordSet=
                        mysql_query("SELECT * FROM `class` ",$con);
                        $row=mysql_fetch_assoc($recordSet);
                     
                      ?>
                      <?php do{ ?>
                                  <option><?php echo $row["cl_name"]; ?></option>
                        <?php }while($row=mysql_fetch_assoc($recordSet));?>
                        </select>
                                          <div class="form-group" style="">
                                            <label> Date</label>
                                            <input class="form-control" type="date" name="date">
                                        </div>  
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                      <?php
                     
         if(isset($_POST["uname"])){

          $image=$_POST["image"];
          $name=$_POST["name"];
          $uname=$_POST["uname"];
          $score=$_POST["score"];
          $category=$_POST["category"];
          $section=$_POST["section"];
          $date=$_POST["date"];
          $classname=$_POST["classname"];
        
          if ( $image =="" || $name =="" || $category =="" || $score =="" || $section =="" || $uname =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="UPDATE `centerTopper` SET `image`='$image',`name`='$name',`uname`='$uname',`score`='$score',`category`='$category',`date`='$date',`classname`='$classname',`section`='$section' WHERE `toid`=$getID";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../design/js/jquery-1.10.2.js"></script>
    <script src="../design/js/bootstrap.min.js"></script>
    <script src="../design/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../design/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../design/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../design/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="../design/js/demo/dashboard-demo.js"></script>

</body>

</html>
