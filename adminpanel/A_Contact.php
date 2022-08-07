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
  <!-- Custom styles -->
  <link href="../public/cssa/style.css" rel="stylesheet">
  <link href="../public/cssa/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    
    <!--header end-->

    <!--sidebar start-->
    <?php
   include'../layout/A_header.php';
    ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i><img id="ico" src="../public/icons/message.png" height="40" width="40"></i>Message Form Validation</h3>
            <ol class="breadcrumb">
              <li><i><img id="ico" src="../public/icons/home.png" height="15" width="15"></i><a href="../adminpanel/A_index.php">Home</a></li>
              <li><i><img id="ico" src="../public/icons/message.png" height="15" width="15"></i>Your Messages</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Your Messages
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i></i>Name</th>
                    <th><i></i>Subject</th>
                    <th><i></i>Email</th>
                    <th><i></i>Phone</th>
                    <th><i></i>Center Name</th>
                    <th><i></i>Message</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
          <?php
          include 'ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `messages` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
                  <tr>
                    <td><?php echo $row["name"]; ?></td>
                     <td><?php echo $row["subject"]; ?></td>
                     <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["companyName"]; ?></td>
                     <td><?php echo $row["message"]; ?></td>
                   
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" class="icon_close_alt2" href="deletePages/contactdelete.php?ID=<?php echo $row["id"]; ?>"><i class="icon_check_alt2"></i></a>                        
                      </div>
                    </td>
                  </tr>
                </tbody>
                <?php }while($row=mysql_fetch_assoc($recordSet));?>
              </table>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="../public/jsa/jquery.js"></script>
  <script src="../public/jsa/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../public/jsa/jquery.scrollTo.min.js"></script>
  <script src="../public/jsa/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="../public/js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="../public/jsa/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="../public/jsa/scripts.js"></script>


</body>

</html>
