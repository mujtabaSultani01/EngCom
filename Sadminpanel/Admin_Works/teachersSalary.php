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
                                    $getID=$_GET["imgID"];
                                      $recordSet=
                                      mysql_query("SELECT * FROM `payment` WHERE employeeid=$getID and employeeType='teacher'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
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
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
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
                        <div class="panel-heading">
                             <b style="color:#8B0000;">Teacher Payment </b><b id="st">Form</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>Paid</th>
                                            <th>Remained</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            
                                            <td><?php echo $row["paid"]; ?></td>
                                            <td><?php echo $row["remained"]; ?></td>
                                            <td class="center"><?php echo $row["sDate"]; ?></td>
                                            <td><?php echo $row["eDate"]; ?></td>
                                            <td>
                                                <a class="btn btn-success" href="teachersSalaryUpdate.php?imgID=<?php echo $row["payid"]; ?>"  class="icon_check_alt2">Update</a>
                                                <a class="btn btn-danger" href="stepOneDelete.php?paID=<?php echo $row["payid"]; ?> & Clname=teachersSalary.php"  class="icon_check_alt2">Delete</a>
                                            </td>
                                        
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Add New Record
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">  
                                         <div class="form-group">
                                            <label> Paid </label>
                                            <input class="form-control" type="number" name="paid">
                                        </div>
                                       <div class="form-group">
                                            <label> Remained </label>
                                            <input class="form-control" type="number" name="remained">
                                        </div>
                                        <div class="form-group">
                                            <label> Start Date </label>
                                            <input class="form-control" type="date" name="sdate">
                                        </div>
                                        <div class="form-group">
                                            <label> End Date </label>
                                            <input class="form-control" type="date" name="edate">
                                        </div> 
                                        <div class="form-group" style="display:none">
                                            <label> User Type </label>
                                            <input class="form-control" type="text" value="teacher" name="userType">
                                        </div>  
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                     <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["paid"])){

          // $target= "images/".basename($_FILES['image']['name']);
          // $image = $_FILES['image']['name'];

          $paid=$_POST["paid"];
          $remained=$_POST["remained"];
          $sdate=$_POST["sdate"];
          $edate=$_POST["edate"];
          $userType=$_POST["userType"];
        
          if ($paid =="" || $remained =="" || $sdate =="" || $edate =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
                
                 $query="INSERT INTO `payment`(`employeeType`, `paid`, `remained`, `sDate`, `eDate`, `employeeid`) VALUES ('$userType','$paid','$remained','$sdate','$edate',$getID)";
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