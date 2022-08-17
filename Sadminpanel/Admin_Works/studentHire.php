<?php
session_start();
 
  if (!isset($_SESSION['loginAsAdmin'])){

      header("location:../adminpanel/login/alogin.php");
  }
?>
<!DOCTYPE html>
<html>
 <?php

    include '../layout/head.php';

 ?>
 <style type="text/css">
#st{
    color: #008B8B;
}
#profile{
            border-radius: 30px;
        }
 </style>
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
     <?php
                                    // $getID=$_GET["imgID"];
                                    //   $recordSet=
                                    //   mysql_query("SELECT * FROM `payment` WHERE payid=$getID and employeeType='student'",$con);
                                    //   $rows=mysql_fetch_assoc($recordSet);
                                    ?>
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
                            <a href="studentCollection.php"><i class="fa fa-dashboard fa-fw"></i> Back</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        


        <div id="page-wrapper">
            <!-- /.row -->
            <br><br>
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Student New Class Attending Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action=""> 


                        <label for="usernamesignup" class="uname"> Class Name</label><br>
                        <select class="form-control" name="classname">
                        <?php
                        include '../../adminpanel/ConPage.php';
                        $getID=$_GET["imgID"];
                        $recordSet=
                        mysql_query("SELECT cl.cl_name as classname FROM `class` as cl WHERE cl.cl_name NOT IN( SELECT ta.clname FROM attend as ta WHERE ta.stid=$getID) ",$con);
                        $row=mysql_fetch_assoc($recordSet);
                     
                      ?>
                      <?php do{ ?>
                                  <option><?php echo $row["classname"]; ?></option>
                        <?php }while($row=mysql_fetch_assoc($recordSet));?>
                        </select> <br>
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                     <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["classname"])){

          // $target= "images/".basename($_FILES['image']['name']);
          // $image = $_FILES['image']['name'];

          $classname=$_POST["classname"];

          if ($classname =="" ) {
            echo "<span style='color:red;'>please the fields!!!</span>";
          }
          else
          {
          $query="INSERT INTO `attend`(`clname`, `stid`) VALUES ('$classname',$getID)";
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