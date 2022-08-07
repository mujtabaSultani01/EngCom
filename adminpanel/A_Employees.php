<?php
session_start();
 
  if (!isset($_SESSION['loginAsUser'])){

      header("location:login/alogin.php");
  }
?>
<?php
             
         include 'ConPage.php';
         
         if(isset($_POST["degree"])){

          $ename=$_POST["name"];
          $edegree=$_POST["degree"];
          $edescription=$_POST["Description"];
          $eimage=$_POST["image"];
        
          if ( $ename =="" || $edegree =="" || $edescription =="" || $eimage =="") {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `employees` (`name`, `degree`, `Description`, `image`) 
            VALUES ('$ename', '$edegree', '$edescription', '$eimage');";
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
            <h3 class="page-header"><i><img id="ico" src="../public/icons/employee.png" height="40" width="40"></i>Employees Form Validation</h3>
            <ol class="breadcrumb">
              <li><i><img id="ico" src="../public/icons/home.png" height="15" width="15"></i><a href="../adminpanel/A_index.php">Home</a></li>
              <li><i><img id="ico" src="../public/icons/employee.png" height="15" width="15"></i>Employees</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Employees
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="name" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> Section <span class="required">*</span></label>
                      <!-- <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="degree" required />
                      </div> -->
                       <div class="col-lg-10">
                        <select class="form-control" name="degree">
                          <option>English_Teacher</option>
                          <option>Computer_Teacher</option>
                          <option>Admin</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Description</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="Description" required></textarea>
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
                        <button class="btn btn-primary" type="submit" name="submit">Save</button>
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
    <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Employees
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i></i>Employee Name</th>
                    <th><i></i>Employee Degree</th>
                    <th><i></i>Description</th>
                    <th><i></i> Employee Image</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
        <?php
          include 'ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `employees` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
                  <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["degree"]; ?></td>
                    <td><?php echo $row["Description"]; ?></td>
                    <td><img src="../public/images/services/<?php echo $row["image"]; ?>"  widht="200" height="200"></td>

                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="updatePages/employeeupdate.php?ID=<?php echo $row["id"]; ?>"><i class="icon_check_alt2"></i></a> 
                        <a class="btn btn-danger" class="icon_close_alt2" href="deletePages/employeedelete.php?ID=<?php echo $row["id"]; ?>"><i class="icon_check_alt2"></i></a>                        
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
