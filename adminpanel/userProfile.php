<?php
session_start();
 
  $getID=$_GET["uid"];
  if (!isset($_SESSION['loginAsUser'])){

      header("location:login/alogin.php");
  }
?>
<?php
             
         include 'ConPage.php';
         
         if(isset($_POST["uname"])){

          $name=$_POST["name"];
          $uname=$_POST["uname"];
          $email=$_POST["email"];
          $password=$_POST["password"];
          $image=$_POST["image"];
        
          if ( $name =="" || $uname =="" || $password =="" || $image =="") {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="UPDATE `users` SET `name`='$name',`uname`='$uname',`email`='$email',`image`='$image',`password`='$password' WHERE `uid`=$getID";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
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

  <title>Lemar_Academy</title>

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
            <h3 class="page-header"><i><img id="ico" src="../public/icons/employee.png" height="40" width="40"></i>User Profile</h3>
          </div>
        </div><div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                My Profile
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i></i> First Name</th>
                    <th><i></i> User Name</th>
                    <th><i></i> Email</th>
                    <th><i></i> Password</th>
                    <th><i></i> Image</th>
                  </tr>
        <?php
          include 'ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `users` where type='user' AND uid=$getID ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
                  <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["uname"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><img src="../public/images/services/<?php echo $row["image"]; ?>"  widht="100" height="100" style="border-radius:50px;"></td>
                  </tr>
                </tbody>
                <?php }while($row=mysql_fetch_assoc($recordSet));?>
              </table>
            </section>
          </div>
        </div>
        <!-- Form validations -->
        <?php
          include 'ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `users` where type='user' AND uid=$getID  ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Update Your Profile
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" value="<?php echo $row["name"]; ?>" name="name" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> User Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" value="<?php echo $row["uname"]; ?>" name="uname" minlength="3" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Email <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" value="<?php echo $row["email"]; ?>"  name="email" minlength="5" type="text" required />
                      </div>
                    </div>
                   <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" value="<?php echo $row["password"]; ?>"  name="password" minlength="5" type="password" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="image" type="file" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit">Update</button>
                        <button class="btn btn-default" type="reset" name="reset">Cancel</button>
                      </div>
                    </div>
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
    <div class="text-right">
      <div class="credits">

          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="jsa/jquery.js"></script>
  <script src="jsa/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="jsa/jquery.scrollTo.min.js"></script>
  <script src="jsa/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="jsa/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="jsa/scripts.js"></script>


</body>

</html>
