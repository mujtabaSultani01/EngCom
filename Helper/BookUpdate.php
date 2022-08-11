<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'Head.php';
  ?>

  <style>
    #submitbut{
      width: 90px;
      height: 40px;
    }
    #lib_item,#bookitem,#ebookitem{
    width: 100%;

    }
    #row1{
      width: 20px;
    }
    </style>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
     <?php
     include 'Header.php';
     ?>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
     <?php
      include 'Asside.php';
     ?>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6" id="bookitem">
            <section class="panel">
              <header class="panel-heading no-border">
                Borrow Table
              </header>
                </section>
              <table class="table table-bordered" id="mytable">
                <form method="post" action="" id="form1">
                <!-- <thead> -->

                 <?php
          include 'dbCon.php';
         $getID=$_GET["ID"];

         $recordSet=mysql_query("SELECT * FROM `book` WHERE ID=$getID",$con);
        $row=mysql_fetch_assoc($recordSet);
       
            ?>
                    <tr><th>Category</th><td><input type="text" name="Category" value="<?php echo $row["Category"]; ?>"></td></tr>
                      <tr><th>Edition</th><td><input type="text" name="Edition" value="<?php echo $row["Edition"]; ?>"></td></tr>

                      <tr><th>Au_Name</th><td><input type="text" name="auname" value="<?php echo $row["Au_Name"]; ?>"></td></tr>

                      <tr><th>Au_Last_Name</th><td><input type="text" name="aulastname" value="<?php echo $row["Au_Last_Name"]; ?>"></td></tr>

                      <tr><th>lib_item_id</th><td><input type="text" name="liitemid" value="<?php echo $row["lib_item_id"]; ?>"></td></tr>
        
              </table>
              <input type="submit" name="submit" value="Update" id="submitbut">
             </form>
               <?php
  
    if (isset($_POST["submit"])) {

      
          $ebcategory=$_POST["Category"];
          $ebedition=$_POST["Edition"];
          $ebauname=$_POST["auname"];
          $ebaulastname=$_POST["aulastname"];
          $ebliitemid=$_POST["liitemid"];
    
  mysql_query("UPDATE `book` SET `Category` = '$ebcategory', `Edition` = '$ebedition', `Au_Name` = '$ebauname', `Au_Last_Name` = '$ebaulastname', `lib_item_id` = '$ebliitemid' WHERE `book`.`ID` = $getID; ",$con);
     echo "Record Updated...!";
      }
?>
            </section>
          </div>
        </div>

    
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>