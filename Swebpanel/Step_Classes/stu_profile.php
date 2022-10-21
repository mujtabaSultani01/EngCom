<?php
 $getID=$_GET["stid"];
 $getClName=$_GET["Clname"];
 $getClassName=$_GET["Class_name"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>EngCom</title>
    <link rel="shortcut icon" type="image/bmp" href="../public/english.bmp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="layout" content="main"/>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="../Public/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="../public/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
</head>
    <body>

         <style>
        #body-content { padding-top: 40px;}
        #gal{

            border-radius: 20px;
        }
        #st{
           color: #008B8B;
           }

        #bo{
            color: blue;
        }
         #profile{
            border-radius: 30px;
        }
        #mname{
            color: brown;
            margin-left: 20px;
        }
        #da{
             color: green;
        }
        #par{
              color: black;
        }
        #pt{

            color: black;
        }
        #ht{
            color: plum;
        }
        #styl{
            color: brown;
        }
        #vo{
            color: red;
        }
        #ico{
            border-radius: 10px;
        }
    </style>
          <?php
          include '../layout/Eheader.php';
          ?>
        <div id="body-container">
            <div id="body-content">
                
                      <div class="body-nav body-nav-vertical" >
                        <div class="container">
                            <ul>
                                 <li>
                                    <a href="<?php echo $getClName ?>" id="sched">
                                        <i><img id="ico" src="../public/images/icons/schedule.png"></i><br> Schedule
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo $getClName ?>" id="instruc">
                                        <i><img id="ico" src="../public/images/icons/instruction.png"></i><br> Instructions
                                    </a>
                                </li> 
                                <li>
                                    <a href="<?php echo $getClName ?>" id="less">
                                        <i><img id="ico" src="../public/images/icons/lessons.png"></i><br> Lessons
                                    </a>
                                </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i><img id="ico" src="../public/images/icons/message.png"></i><br>Message
                        <b class="caret hidden-phone"></b>
                        </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $getClName ?>" id="pmessage">
                                        <i><img id="ico" src="../public/images/icons/message.png"></i><br> Private message
                                    </a>
                                </li> 
                              <li>
                                    <a href="<?php echo $getClName ?>" id="pumessage">
                                        <i><img id="ico" src="../public/images/icons/message.png"></i><br> Public message
                                    </a>
                                </li> 
                                    </ul>
                            </li>
                                <li>
                                    <a href="<?php echo $getClName ?>" id="mark">
                                        <i><img id="ico" src="../public/images/icons/marks.png"></i><br> Marks
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo $getClName ?>" id="classmates">
                                        <i><img id="ico" src="../public/images/icons/followers.png"></i><br> Followers
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo $getClName ?>" id="too">
                                        <i><img id="ico" src="../public/images/icons/tools.png"></i><br> Tools
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
            <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <center><h3> SCP (Step Classes Package) <br/>
                        </h3></center>

                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                             <li  class="dropdown">
                         <?php
                                include '../../adminpanel/ConPage.php';

                                $q=mysql_query("SELECT * FROM `student` WHERE st_id=$getID",$con);
                                $row=mysql_fetch_assoc($q);
                                $userimage=$row["image"];
                                $userPa=$row["password"];

                                $Squery=mysql_query("SELECT at.clname as classname FROM `attend` at ,`student` as st WHERE at.stid=st.st_id AND at.stid=$getID",$con);
                                $Srow=mysql_fetch_assoc($Squery);
                                $ClassN=$Srow["classname"];

                            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'><img id='ico' style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/$userimage'>

                            </a>"
                           ?>
                                 <ul class="dropdown-menu">
                                        <li>
                                            <a href='../demo/logout.php'>log out</a>
                                        </li>
                                        
                                 </ul>
                            </li>
                            <!-- <li>
                                <img style="width:50px; height:50px; border-radius:10px;" src='../../public/images/services/1.jpg'>
                            </li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="page container">
           <div class="row">
            <div class="span16" id="tool" style="">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-sign-blank"></i>
                        <h5>User Profile for <b style="color:#8B0000;">Mr</b>.<b id="st"><?php echo $row["uname"]; ?></b> </h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>     <!-- box-hide-me box-content collapse out -->
                    <div class="box-hide-me box-content collapse out">
                        <legend class="lead" id="styl">
                            <center>
                            <img style='width:130px; height:130px; border-radius: 70px;' src='../../public/images/services/<?php echo $row["image"]; ?>'>
                            <h3 class="page-header"><b style="color:#8B0000;">Mr</b>.<b id="st"><?php echo $row["uname"]; ?></b></h3>
                        </center>
                
                        </legend>
                       <div class="box-content box-table">
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>First Name</th>
                                            <th>User Name</th>
                                            <th>Father Name</th>
                                            <th>Email Address</th>
                                            <th>Password</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><center><img style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/<?php echo $row["image"]; ?>'></center></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["uname"]; ?></td>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["password"]; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
            <div class="span8" id="homework" style="">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Update Profile</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline" method="POST" action="">

                    <div class="form-group" style="">
                     <label> First Name </label><br>
                    <input class="form-control" type="text" value="<?php echo $row["name"]; ?>" name="name">
                    </div>
                    <div class="form-group" style="">
                     <label> User Name </label><br>
                    <input class="form-control" type="text" value="<?php echo $row["uname"]; ?>" name="uname">
                    </div>
                    <div class="form-group" style="">
                     <label> Father Name </label><br>
                    <input class="form-control" type="text" value="<?php echo $row["fname"]; ?>" name="fname">
                    </div>
                    <div class="form-group" style="">
                     <label> Email Address </label><br>
                    <input class="form-control" type="text" value="<?php echo $row["email"]; ?>" name="email">
                    </div>
                    <div class="form-group" style="">
                     <label> Image </label><br>
                    <input class="form-control" type="file" name="image">
                    </div>
                    <div class="form-group" style="">
                     <label> Password </label><br>
                    <input class="form-control" type="password" value="<?php echo $row["password"]; ?>" name="password">
                    </div>
                    <div class="form-group" style="">
                     <label> Retype Password </label><br>
                    <input class="form-control" type="password" value="<?php echo $row["password"]; ?>" name="rpassword">
                    </div><br>
                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Update
                        </button>
                    </div>
                        </form>

        <?php
                      
         if(isset($_POST["uname"])){

          // $target= "images/".basename($_FILES['image']['name']);
          // $image = $_FILES['image']['name'];

          $name=$_POST["name"];
          $uname=$_POST["uname"];
          $fname=$_POST["fname"];
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
                
          $query="UPDATE `student` SET `name`='$name',`uname`='$uname',`fname`='$fname',`email`='$email',`image`='$image',`password`='$password' WHERE `st_id`='$getID'";
          mysql_query($query,$con);

          $quer="UPDATE `smessage` SET `password`='$password' WHERE classname='$ClassN' AND (`password`='$userPa' AND `type`='private') ";
          mysql_query($quer,$con);


          $que="UPDATE `smessage` SET `image`='$image' WHERE `image`='$userimage' AND `classname`='$ClassN'";
          mysql_query($que,$con);

          $que="UPDATE `smessage` SET `tomsgimage`='$image' WHERE `tomsgimage`='$userimage' AND `classname`='$ClassN'";
          mysql_query($que,$con);

          
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
            </div>

            </div>
                    </div>
                    <div class="box-footer">
                        <h5 id="ht">Donʻt focus only internal tool, Check other sources</h5>
                    </div>
                </div>
            </div>
        </div>  
       
<!--                        .........................
 -->
        </div>

       
    </section>

    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>
   <?php
      
      include '../layout/footer.php';
   ?>
    </body>
</html>














