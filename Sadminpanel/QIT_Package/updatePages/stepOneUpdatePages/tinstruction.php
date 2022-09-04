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

                         $recordSet=mysql_query("SELECT * FROM `tinstruction` WHERE id=$getID",$con);
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
                    <h1 class="page-header"><b id="st">Teacher Instruction Update Form</b></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:hsla(290,60%,70%,0.3)">
                            Teacher Instruction Update Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form  method="POST" action="">
                                 
                                      <div class="form-group">
                                            <label> Body Text </label>
                                              <textarea class="form-control" rows="3" name="issues"><?php echo $row["body"]; ?></textarea>
                                        </div>
                                        <div class="form-group">
                        <label> Date </label>
                       <input class="form-control" placeholder="Enter text" type="date" name="date" value="<?php echo $row["date"]; ?>">
                        </div>    
                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                          <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                        </form>
                         <?php
                  if (isset($_POST["submit"])) {

                    
              
                        $issues=$_POST["issues"];
                        $date=$_POST["date"];
                                
                 mysql_query("UPDATE `tinstruction` SET `body` = '$issues',`date` = '$date'  WHERE `tinstruction`.`id` = $getID; ",$con);
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
