<?php
             
         $con=mysql_connect("localhost","root","");
          mysql_select_db("Kandahar_library");
         
         if(isset($_POST["Name"])){

          $id=$_POST["ID"];
          $name=$_POST["Name"];
          $language=$_POST["Language"];
          $type=$_POST["Type"];
          $picture=$_POST["Picture"];
          $Publish_date=$_POST["Publish_date"];
        
          if ($id =="" || $name =="" || $language =="" || $type =="" || $picture =="" || $Publish_date=="") {
            echo "<span style='color:red;'>please fill all fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `library_items` (`ID`, `Name`, `Language`, `Type`, `Picture`, `Publish_date`) VALUES ('$id', '$name', '$language', '$type', '$picture', '$Publish_date');";
          mysql_query($query,$con);
                     header("location:index.php");
          echo "Done...";
        }
        }

?>

<?php
             
         $con=mysql_connect("localhost","root","");
          mysql_select_db("Kandahar_library");
         
         if(isset($_POST["Au_Name"])){

          $bid=$_POST["id"];
          $bcategory=$_POST["Category"];
          $bedition=$_POST["Edition"];
          $baname=$_POST["Au_Name"];
          $balname=$_POST["Au_Last_Name"];
          $bliitemid=$_POST["li_Item_id"];
        
          if ($bid =="" || $bcategory =="" || $bedition =="" || $baname =="" || $balname =="" || $bliitemid=="") {
            echo "<span style='color:red;'>please fill all fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `book` (`ID`, `Category`, `Edition`, `Au_Name`, `Au_Last_Name`, `lib_item_id`) 
            VALUES ('$bid', '$bcategory', '$bedition', '$baname', '$balname', '$bliitemid');";
          mysql_query($query,$con);
                     header("location:index.php");
          echo "Done...";
        }
        }

?>

<?php
             
         $con=mysql_connect("localhost","root","");
          mysql_select_db("Kandahar_library");
         
         if(isset($_POST["AuLName"])){

          $bid=$_POST["id"];
          $bcategory=$_POST["Category"];
          $bedition=$_POST["Edition"];
          $baname=$_POST["AuName"];
          $balname=$_POST["AuLName"];
          $bliitemid=$_POST["li_Item_id"];
        
          if ($bid =="" || $bcategory =="" || $bedition =="" || $baname =="" || $balname =="" || $bliitemid=="") {
            echo "<span style='color:red;'>please fill all fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `Ebook` (`ID`, `Category`, `Edition`, `Au_Name`, `Au_Last_Name`, `lib_item_id`) 
            VALUES ('$bid', '$bcategory', '$bedition', '$baname', '$balname', '$bliitemid');";
          mysql_query($query,$con);
                     header("location:index.php");
          echo "Done...";
        }
        }

?>

<?php
             
         $con=mysql_connect("localhost","root","");
          mysql_select_db("Kandahar_library");
         
         if(isset($_POST["M_Type"])){

          $mid=$_POST["id"];
          $mtype=$_POST["M_Type"];
          $mitemid=$_POST["li_Item_id"];
        
          if ($mid =="" || $mtype =="" || $mitemid==""){
            echo "<span style='color:red;'>please fill all fields!!!</span>";
          }
          else
          {
            $query="INSERT INTO `magazine` (`ID`, `Mtype`, `Lib_Item_id`) VALUES ('$mid', '$mtype', '$mitemid');";
          mysql_query($query,$con);
                     header("location:index.php");
          echo "Done...";
        }
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php 
  include 'Head.php';
 ?>
 <style>

 nav{
padding: 10px;
height: 55px;
color: black;
}
nav ul{

  text-align: left;
}
nav ul li{
display: inline;
margin-left: 40px;

}
#itemForm{
  /*display: none;*/
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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading"> 
                <!-- Form validations -->  
                <nav>
                <ul>
                <li><a href="form_validation.php">library_Items</a></li>
                <li><a href="UserFormValidation.php">Users</a></li>
                <li><a href="BorroweFormValidation.php">borrower</a></li>
                <li><a href="BorrowFormValidation.php">borrow</a></li>

              </ul>
            </nav>
               
             </header>
             <header class="panel-heading"> Library Form Validation </header>
              <div class="panel-body">
                <div class="form" id="itemForm">
<!-- class="form-validate form-horizontal" id="feedback_form"
 -->
                  <form class="form-validate form-horizontal" method="post" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">ID <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="ID" type="Number" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="Name" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Language</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="text" name="Language" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Type <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="Type" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Picture</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="file" name="Picture" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Publish_date</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="text" name="Publish_date" />
                      </div>
                    </div>
                    <!-- <div class="form-group"> -->
                     <!--  <div class="col-lg-offset-2 col-lg-10"> -->
                       <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                      <!-- </div> -->
                   <!--  </div> -->
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Form validations for 'Book'
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " method="post" action="">
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">ID <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="id" type="number" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Category <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="Category" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Edition <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="Edition" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Au_Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="Au_Name" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-2">Au_Last_Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="Au_Last_Name" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">li_Items_id <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="li_Item_id" type="number" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                       <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
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
                Advanced Form validations for 'Ebook'
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " method="post" action="">
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">ID <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="id" type="number" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Category <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="Category" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Edition <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="Edition" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Au_Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="AuName" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-2">Au_Last_Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="AuLName" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">li_Items_id <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="li_Item_id" type="number" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                       <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
     <!--  End of ebook form -->

     <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Form validations for 'Magazine'
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " method="post" action="">
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">ID <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="id" type="number" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">M_Type <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="M_Type" type="text" />
                      </div>
                    </div>                  
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">li_Items_id <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="li_Item_id" type="number" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                       <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>

      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
