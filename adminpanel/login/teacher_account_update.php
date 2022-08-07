<!DOCTYPE html>
<html>
 <?php

   include '../../adminpanel/ConPage.php';
    include '../layout/head.php';

 ?>
 <style type="text/css">
#st{
    color: #008B8B;
}
#profile{
            border-radius: 30px;
        }
 </style>
<body>
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

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
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
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/sultani.jpg'>  <!-- <i class="fa fa-user fa-fw"></i> -->  <!-- <i class="fa fa-caret-down"></i> -->
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        <?php

        include '../layout/header.php';

     ?>

        <div id="page-wrapper">
            <div class="row">
                <center>
                <div class="col-lg-12">
                    <br><br><br>
                    <img style='width:130px; height:130px; border-radius: 50px;' src='../../public/images/services/sultani.jpg'>
                    <h3 class="page-header"><b style="color:#8B0000;">Mr</b>.<b id="st">Mujtaba</b></h3>
                </div>
            </center>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Profile for <b style="color:#8B0000;">Mr</b>.<b id="st">Mujtaba</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>User name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Image</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $recordSet=
                                      mysql_query("SELECT * FROM `marks` WHERE classname='Step-1'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            
                                            <td><?php echo $row["mid"]; ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td class="center"><?php echo $row["fname"]; ?></td>
                                            <td class="center"><?php echo $row["testa"]; ?></td>
                                            <td><center><img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/sultani.jpg'></center></td>
                                            <td class="center"><?php echo $row["total"]; ?></td>
                                        
                                    </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:silver">
                            Update Profile
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="">  
                                         <div class="form-group">
                                            <label> Name </label>
                                            <select class="form-control" name="name">
                                               <?php
                                        $record=
                                        mysql_query("SELECT st.name from student as st, attend as at WHERE st.st_id=at.stid AND at.clname='Step-1'",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                      <?php do{ ?>
                                                  <option><?php echo $rows["name"]; ?></option>
                                                  <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                         <div class="form-group">
                                            <label> User Name </label>
                                            <select class="form-control" name="uname">
                                    <?php
                                        $record=
                                        mysql_query("SELECT st.fname from student as st, attend as at WHERE st.st_id=at.stid AND at.clname='Step-1'",$con);
                                        $rows=mysql_fetch_assoc($recordSet);
                                     
                                      ?>
                                                 <?php do{ ?>
                                                  <option><?php echo $rows["fname"]; ?></option>
                                        <?php }while($rows=mysql_fetch_assoc($record));?>
                                            </select>   
                                            
                                        </div>
                                        <div class="form-group">
                                            <label> Email </label>
                                            <input class="form-control" type="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label> Image </label>
                                            <input class="form-control" type="file" name="image">
                                        </div> 
                                        <div class="form-group">
                                            <label> Password </label>
                                            <input class="form-control" type="password" name="password">
                                        </div>  
                                            <div class="form-group">
                                            <label> R_Password </label>
                                            <input class="form-control" type="password" name="rpassword">
                                        </div> 
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
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
                                  <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["uname"])){

          //$target= "images/".basename($_FILES['image']['name']);
          $image = $_FILES['image']['name'];

          $name=$_POST["name"];
          $uname=$_POST["uname"];
          $email=$_POST["email"];
          $password=$_POST["password"];
          $rpassword=$_POST["rpassword"];
        
          if ($name =="" || $uname =="" || $email =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            if ($password == $rpassword) {
                
                 $query="UPDATE `teacher` SET `name`='$name',`uname`='$uname',`email`='email',`image`='$image',`password`='$password' WHERE `tid`='$getID'";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
        }

?>
        </div>
        <!-- /#page-wrapper -->
        </div>
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../design/js/jquery-1.10.2.js"></script>
    <script src="../design/js/bootstrap.min.js"></script>
    <script src="../design/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../design/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
