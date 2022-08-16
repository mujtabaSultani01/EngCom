<?php
session_start();
 
  if (!isset($_SESSION['loginAsAdmin'])){

      header("location:../adminpanel/login/alogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>


  <!-- Bootstrap CSS -->
  <link href="../public/cssa/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../public/cssa/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../public/cssa/elegant-icons-style.css" rel="stylesheet" />
  <link href="../public/cssa/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../public/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../public/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../public/css/owl.carousel.css" type="text/css">
  <link href="../public/cssa/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../public/css/fullcalendar.css">
  <link href="../public/cssa/widgets.css" rel="stylesheet">
  <link href="../public/cssa/style.css" rel="stylesheet">
  <link href="../public/cssa/style-responsive.css" rel="stylesheet" />
  <link href="../public/cssa/xcharts.min.css" rel=" stylesheet">
  <link href="../public/cssa/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>
<?php
 
  include 'layout/headp.php';

?>
<body>
    <?php  
                    include '../adminpanel/ConPage.php';
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
                <a class="navbar-brand" href="index.php">EngCom</a>
            </div>
            <!-- /.navbar-header -->
            <?php
            include '../adminpanel/ConPage.php';
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
            include '../adminpanel/ConPage.php';
            $qnot=mysql_query("SELECT * FROM `admin_teacher_msg` as atmsg, teacher as te WHERE atmsg.te_id=te.tid AND atmsg.side='teacher'",$con);
            $row=mysql_fetch_assoc($qnot);
            $teacher_id=$row["te_id"];
            $teacher_image=$row["image"];
            ?>
                       <?php do{ ?>
                      <?php if ($row["see_no"]=='1') { ?>
                        <li style="background-color:#D8BFD8;">
                            <a href="Admin_Works/messages/adminToTeacher_msg.php?tid=<?php echo $row['te_id'] ?> & timage=<?php echo $row['image'] ?> & uid=<?php echo $uid ?>">
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
                            <a href="Admin_Works/messages/adminToTeacher_msg.php?tid=<?php echo $row['te_id'] ?> & timage=<?php echo $row['image'] ?> & uid=<?php echo $uid ?>">
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
                            <a href="Admin_Works/messages/newAdminMsg.php?uid=<?php echo $uid ?> & clname=<?php echo $row["clname"]; ?>">
                                <div>
                                    <i><img style='width:28px; height:28px; border-radius: 14px;' src='../public/images/services/<?php echo $row["image"]; ?>'></i> <?php echo $row["name"]; ?>
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
                                

                            echo "<img style='width:40px; height:40px; border-radius: 20px;' src='../public/images/services/$userimage'>";
                           ?>
                    </a>
                     
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="layout/admin-profile.php?uid=<?php echo $uid ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="layout/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
     <?php

        include 'layout/header.php';

     ?>
        

        <div id="page-wrapper">
            <br><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">About Center</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

         <?php
              $recordSet=
              mysql_query("SELECT COUNT(student.name) as total FROM `student`",$con);
              $row=mysql_fetch_assoc($recordSet);
              $total=$row["total"];
              ?>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg" style="border-radius:15px;">
              <div class="count"><?php echo $total ?></div>
              <div class="title">Total Students</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <?php
              $recordSet=
              mysql_query("SELECT COUNT(teacher.name) as total FROM `teacher`",$con);
              $rows=mysql_fetch_assoc($recordSet);
              $total=$rows["total"];
              ?>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg" style="border-radius:15px;">
              <div class="count"><?php echo $total ?></div>
              <div class="title">Total Teachers</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <?php
              $recordSet=
              mysql_query("SELECT COUNT(users.name) as total FROM `users`",$con);
              $rows=mysql_fetch_assoc($recordSet);
              $total=$rows["total"];
              ?>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box purple-bg" style="border-radius:15px;">
              <div class="count"><?php echo $total ?></div>
              <div class="title">Toatal Users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <?php
              $recordSet=
              mysql_query("SELECT COUNT(teacher_attend.clname) as total FROM `teacher_attend`",$con);
              $rows=mysql_fetch_assoc($recordSet);
              $total=$rows["total"];
              ?>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg" style="border-radius:15px;">
              <div class="count"><?php echo $total ?></div>
              <div class="title">Total Classes</div>
            </div>
            <!--/.info-box-->
          </div>
          <?php 
           $records=
              mysql_query("SELECT MAX(sDate) As max_date FROM `payment`",$con);
              $ro=mysql_fetch_assoc($records);
              $max_date = $ro["max_date"]."<br>";
              
              $date=date_create($ro["max_date"]);
              date_modify($date,("-90 days"));
              $old_date = date_format($date,"y-m-d");
              echo "<br>";

              $low_level_month = date_format($date,"m");

              switch ($low_level_month) {
                case 01:
                    $f_month="January";
                    $s_month="February";
                    $t_month="March";
                  break;

                  case 02:
                    $f_month="February";
                    $s_month="March";
                    $t_month="April";
                  break;

                  case 03:
                    $f_month="March";
                    $s_month="April";
                    $t_month="May";
                  break;

                  case 04:
                      $f_month="April";
                      $s_month="May";
                      $t_month="June";
                  break;

                  case 05:
                      $f_month="May";
                      $s_month="June";
                      $t_month="July";
                  break;

                  case 06:
                      $f_month="June";
                      $s_month="July";
                      $t_month="August";
                  break;

                  case 07:
                      $f_month="July";
                      $s_month="August";
                      $t_month="September";
                  break;

                  case 08:
                      $f_month="August";
                      $s_month="September";
                      $t_month="October";
                      
                  break;

                  case 09:
                      $f_month="September";
                      $s_month="October";
                      $t_month="Novermber";
                  break;

                  case 10:
                      $f_month="October";
                      $s_month="Novermber";
                      $t_month="December";
                  break;

                  case 11:
                      $f_month="Novermber";
                      $s_month="December";
                      $t_month="January";
                  break;

                  case 12:
                      $f_month="December";
                      $s_month="January";
                      $t_month="February";
                  break;
                
                default:
                       echo "empty...";
                  break;
              }
          ?>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Finencial Section</h3>
  
                </div>
              </div>
                <div class="row">
                <center><h4><b>Financial Computation In:<b><i><strong style="color:#FF7F50;"> <?php echo $f_month.", ".$s_month." & ".$t_month ?></strong></i></b> Months</b></h4></center>
              </div><br>
                <!-- /.col-lg-12 -->
            
           <?php
              $recordSet=
              mysql_query("SELECT SUM(paid) as total FROM `payment` WHERE employeeType='student' AND (sDate>='$old_date' AND sDate<='$max_date') ",$con);
              $rows=mysql_fetch_assoc($recordSet);
              $totalStudentPayment=$rows["total"];
              ?>

          <div class="col-lg-4 col-md-3 col-sm-14 col-xs-14">
            <div class="info-box gray-bg" style="border-radius:80px;">
              <center>
              <div class="count"><?php echo $totalStudentPayment ?>.AF</div>
              <div class="title">Total Students Fee</div>
            </center>
            </div>
            <!--/.info-box-->
          </div>

          <?php
              $recordSet=
              mysql_query("SELECT SUM(paid) as total FROM `payment` WHERE employeeType='teacher' AND (sDate>='$old_date' AND sDate<='$max_date')",$con);
              $rows=mysql_fetch_assoc($recordSet);
              $totalTeacherPayment=$rows["total"];
              ?>
          <div class="col-lg-4 col-md-3 col-sm-14 col-xs-14">
            <div class="info-box dark-bg" style="border-radius:80px;">
              <center>
              <div class="count"><?php echo $totalTeacherPayment ?>.AF</div>
              <div class="title">Total Teachers Salaries</div>
            </center>
            </div>
            <!--/.info-box-->
          </div>
          <?php
              $totalIncome=$totalStudentPayment-$totalTeacherPayment;
              ?>
          <div class="col-lg-4 col-md-3 col-sm-14 col-xs-14">
            <div class="info-box gray-bg" style="border-radius:80px;">
              <center>
              <div class="count"><?php echo $totalIncome ?>.AF</div>
              <div class="title">Final Income</div>
            </center>
            </div>
            <!--/.info-box-->
          </div>

          <!--/.col-->

        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="design/js/jquery-1.10.2.js"></script>
    <script src="design/js/bootstrap.min.js"></script>
    <script src="design/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="design/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="design/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="design/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="design/js/demo/dashboard-demo.js"></script>

</body>

</html>
