<!DOCTYPE html>
<html>
 <?php

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
                        <i class="fa fa-envelop"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bel"></i></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                     <?php
                                    include '../../adminpanel/ConPage.php';
                                    $getID=$_GET["tid"];
                                      $recordSet=
                                      mysql_query("SELECT * FROM `teacher` WHERE tid=$getID",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/<?php echo $row["image"]; ?>'>  <!-- <i class="fa fa-user fa-fw"></i> -->  <!-- <i class="fa fa-caret-down"></i> -->
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../layout/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        <?php

        //include '../layout/header.php';
        include '../Side_bar/baseToother.php';

     ?>


        <div id="page-wrapper">
            <div class="row">
                <center>
                <div class="col-lg-12">
                    <br><br><br>
                    <img style='width:130px; height:130px; border-radius: 70px;' src='../../public/images/services/<?php echo $row["image"]; ?>'>
                    <h3 class="page-header"><b style="color:#8B0000;">Mr</b>.<b id="st"><?php echo $row["uname"]; ?></b></h3>
                </div>
            </center>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Profile for <b style="color:#8B0000;">Mr</b>.<b id="st"><?php echo $row["uname"]; ?></b>
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
                                    <tbody>
                                        <tr class="odd gradeX">
                                            
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["uname"]; ?></td>
                                            <td class="center"><?php echo $row["email"]; ?></td>
                                            <td class="center"><?php echo $row["role"]; ?></td>
                                            <td><center><img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/<?php echo $row["image"]; ?>'></center></td>
                                            <td class="center"><?php echo $row["password"]; ?></td>
                                        
                                    </tr>
                                    </tbody>
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
                                            <input class="form-control" type="text" name="name" value="<?php echo $row["name"]; ?>">
                                        </div>
                                       <div class="form-group">
                                            <label> User Name </label>
                                            <input class="form-control" type="text" name="uname" value="<?php echo $row["uname"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label> Email </label>
                                            <input class="form-control" type="email" name="email" value="<?php echo $row["email"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label> Image </label>
                                            <input class="form-control" type="file" name="image">
                                        </div> 
                                        <div class="form-group">
                                            <label> Password </label>
                                            <input class="form-control" type="password" name="password" value="<?php echo $row["password"]; ?>">
                                        </div>  
                                            <div class="form-group">
                                            <label> R_Password </label>
                                            <input class="form-control" type="password" name="rpassword" value="<?php echo $row["password"]; ?>">
                                        </div> 
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                     <?php
             
         include '../../adminpanel/ConPage.php';
         
         if(isset($_POST["uname"])){

          // $target= "images/".basename($_FILES['image']['name']);
          // $image = $_FILES['image']['name'];

          $name=$_POST["name"];
          $uname=$_POST["uname"];
          $email=$_POST["email"];
          $image=$_POST["image"];
          $password=$_POST["password"];
          $rpassword=$_POST["rpassword"];
        
          if ($name =="" || $uname =="" || $email =="" ) {
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {
            if ($password == $rpassword) {
                
                 $query="UPDATE `teacher` SET `name`='$name',`uname`='$uname',`email`='$email',`image`='$image',`password`='$password' WHERE `tid`=$getID";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Done...";
        }
          else{
              echo "<span style='color:red;'>Your Password don't match!!!</span>";    
      }
        }
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