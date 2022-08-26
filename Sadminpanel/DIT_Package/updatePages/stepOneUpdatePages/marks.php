<!DOCTYPE html>
<html>
 <?php

    include '../../../layout/headu.php';

 ?>
 <style type="text/css">
#st{
    color: brown;
}
 </style>
<body>
              <?php
                          include '../../../../adminpanel/ConPage.php';
                         $getID=$_GET["ID"];
                         $getName=$_GET["clName"];

                         $recordSet=mysql_query("SELECT * FROM `stu_marks` WHERE ma_id=$getID",$con);
                        $row=mysql_fetch_assoc($recordSet);
                       
                            ?> 
    <div id="wrapper">

        <?php

        include '../../../layout/headeru.php';

     ?>
     <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../../<?php echo $getName?>.php "><i class="fa fa-dashboard fa-fw"></i> Go Back </a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><b id="st">Students Marks Update Form </b></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:hsla(290,60%,70%,0.3)">
                            Students Marks Update Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form  method="POST" action="">
                             

                                         <div class="form-group">
                                            <label> Name </label>
                                            <select class="form-control" name="name">
                                               <?php
                                        $record=
                                        mysql_query("SELECT st.name from student as st, attend as at WHERE st.st_id=at.stid AND at.clname='$getName'",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                      <?php do{ ?>
                                                  <option><?php echo $rows["name"]; ?></option>
                                                  <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                         <div class="form-group">
                                            <label> F/name </label>
                                            <select class="form-control" name="fname">
                                    <?php
                                        $record=
                                        mysql_query("SELECT st.fname from student as st, attend as at WHERE st.st_id=at.stid AND at.clname='$getName'",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                                 <?php do{ ?>
                                                  <option><?php echo $rows["fname"]; ?></option>
                                        <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                        <div class="form-group">
                                            <label> Test Name </label>
                                            <input class="form-control" type="text" name="testname" value="<?php echo $row["test_name"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label> Marks </label>
                                            <input class="form-control" type="number" name="marks" value="<?php echo $row["marks"]; ?>">
                                        </div>  
                                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                         <?php
                  if (isset($_POST["submit"])) {

                    
              
          $name=$_POST["name"];
          $fname=$_POST["fname"];
          $testname=$_POST["testname"];
          $marks=$_POST["marks"];
                 mysql_query("UPDATE `stu_marks` SET `stu_name`='$name',`stu_Fname`='$fname',`test_name`='$testname',`marks`='$marks' WHERE `ma_id`='$getID'",$con);
                   echo "record Updated...";
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


    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../../../design/js/jquery-1.10.2.js"></script>
    <script src="../../../design/js/bootstrap.min.js"></script>
    <script src="../../../design/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../../../design/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
