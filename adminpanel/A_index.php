<?php
session_start();
 
  if (!isset($_SESSION['loginAsUser'])){

      header("location:login/alogin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>3G_Academy</title>

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


<body>
  <!-- container section start -->
  <section id="container" class="">


    
    <!--header end-->

    <!--sidebar start-->
    <?php
    include'../layout/A_header.php';
   ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i><img id="ico" src="../public/icons/computer.png" height="40" width="40"></i>3G_Academy</h3>
            <ol class="breadcrumb">
              <li><i><img id="ico" src="../public/icons/home.png" height="15" width="15"></i><a href="../adminpanel/A_index.php">Home</a></li>
              <li><i><img id="ico" src="../public/icons/computer.png" height="15" width="15"></i>3G_Academy</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
             <center><h1><b><strong style="color:brown">3G English Language & Computer Academy</strong></b> </h1></center>
          </div>
        </div><br><br>
         <?php
              $recordSet=
              mysql_query("SELECT COUNT(student.name) as total FROM `student`",$con);
              $row=mysql_fetch_assoc($recordSet);
              $total=$row["total"];
              ?>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box brown-bg" style="border-radius:15px;">
              <i class="fa fa-cloud-download"></i>
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
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box dark-bg" style="border-radius:15px;">
              <i class="fa fa-shopping-cart"></i>
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
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box blue-bg" style="border-radius:15px;">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><?php echo $total ?></div>
              <div class="title">Total Classes</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


  

      </section>
      <div class="text-right">
      </div>
    </section>
    <!--main content end-->


  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../public/jsa/jquery.js"></script>
  <script src="../public/jsa/jquery-ui-1.10.4.min.js"></script>
  <script src="../public/jsa/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../public/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../public/jsa/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../public/jsa/jquery.scrollTo.min.js"></script>
  <script src="../public/jsa/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../public/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../public/jsa/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../public/jsa/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="../public/jsa/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../public/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../public/jsa/calendar-custom.js"></script>
    <script src="../public/jsa/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../public/jsa/jquery.customSelect.min.js"></script>
    <script src="../public/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../public/jsa/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../public/jsa/sparkline-chart.js"></script>
    <script src="../public/jsa/easy-pie-chart.js"></script>
    <script src="../public/jsa/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../public/jsa/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../public/jsa/xcharts.min.js"></script>
    <script src="../public/jsa/jquery.autosize.min.js"></script>
    <script src="../public/jsa/jquery.placeholder.min.js"></script>
    <script src="../public/jsa/gdp-data.js"></script>
    <script src="../public/jsa/morris.min.js"></script>
    <script src="../public/jsa/sparklines.js"></script>
    <script src="../public/jsa/charts.js"></script>
    <script src="../public/jsa/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
