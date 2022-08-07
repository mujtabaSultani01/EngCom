<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="../../public/img/favicon.png">

  <title>EngCom_Admin</title>

  <!-- Bootstrap CSS -->
  <link href="../../public/cssa/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../../public/cssa/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../../public/cssa/elegant-icons-style.css" rel="stylesheet" />
  <link href="../../public/cssa/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../../public/cssa/style.css" rel="stylesheet">
  <link href="../../public/cssa/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
   
    <!--header end-->

    <!--sidebar start-->
    <?php
     include'../../layout/updateHeader.php';
    ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Update Form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../A_index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Gallery</li>
              <li><i class="fa fa-files-o"></i>Gallery Update</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Gallery Update Form
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="">

                     <?php
                          include '../ConPage.php';
                          $getID=$_GET["ID"];

                          $recordSet=mysql_query("SELECT * FROM `gallery` WHERE id=$getID",$con);
                          $row=mysql_fetch_assoc($recordSet);
                       
                          ?>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Images <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="s_image" name="image" type="file" 
                          /><img src="../../public/images/blog/<?php echo $row["image"];?>" width="100" height="100">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" id="update" name="submit">Update</button>
                        <button class="btn btn-default" type="button" id="cancel" name="reset">Reset</button>
                      </div>
                    </div>
    <?php
    if (isset($_POST["submit"])) {

      
          $gimage=$_POST["image"];
    
   mysql_query("UPDATE `gallery` SET  `image` = '$gimage'  WHERE `gallery`.`id` = $getID; ",$con);
     echo "record Updated...";
      }
  ?>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
   <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="../../public/jsa/jquery.js"></script>
  <script src="../../public/jsa/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../../public/jsa/jquery.scrollTo.min.js"></script>
  <script src="../../public/jsa/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="../../public/js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="../../public/jsa/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="../../public/jsa/scripts.js"></script>


</body>

</html>

   
