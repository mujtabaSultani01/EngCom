<?php
session_start();
 
  if (!isset($_SESSION['undroidlogin'])) {
      header("location:../../adminpanel/login/slogin.php");
  }
  
                    //$username=$_SESSION['login'];
                    // echo "Welcome: " .$_SESSION['login'];
                    // $username=$_SESSION['login'];
                    //echo "Welcome:   <img style='width:100px; height:100px; border-radius:30px;'' src='../../public/images/services/$username'> "
                    
            

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

    <script src="../public/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="../public/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
        #body-content { padding-top: 40px;}
        #gal{

            border-radius: 20px;
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
</head>
    <body>
        <?php
       include'../layout/Cheader.php';
    ?>
        <div id="body-container">
            <div id="body-content">
                
                      <div class="body-nav body-nav-vertical">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="#" id="docu">
                                        <i><img id="ico" src="../public/../public/images/icons/documents.png"></i><br> Documents
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="atten">
                                        <i><img id="ico" src="../public/../public/images/icons/attendence.png"></i><br> Attendence
                                    </a>
                                </li> 
                                
                                <li>
                                    <a href="#" id="shomework">
                                        <i><img id="ico" src="../public/../public/images/icons/homework.png"></i><br> Assignment
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="ex">
                                        <i><img id="ico" src="../public/../public/images/icons/excercise.png"></i><br> Excercise
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
                     <center>
                    <h3>Big_Programs Package<br/>
                            <small>Android Studio</small>
                        </h3></center> 
                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                             <li  class="dropdown">
                         <?php
                                include '../../adminpanel/ConPage.php';
                                $studentid=$_SESSION['undroidlogin'];
                                $q=mysql_query("SELECT * FROM `student` WHERE st_id=$studentid",$con);
                                $row=mysql_fetch_assoc($q);
                                $userimage=$row["image"];
       
                            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'><img id='ico' style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/$userimage'>

                            </a>"
                           ?>
                                 <ul class="dropdown-menu">
                                        <li>
                                            <a href='stu_profile.php?stid=<?php echo $studentid ?> & Clname=android_studio.php '>update profile</a>
                                        </li>
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
            <div class="span16" id="lessons">
                <div class="box">
                    <div class="box-content">
                        <legend class="lead" id="styl">
                            Follow Our Series...
                        </legend>
                         <div class="box-content">
                        <div class="btn-group-box" >
                        
                        <?php
                                    include '../../adminpanel/ConPage.php';
                                      $recordSet=
                                      mysql_query("SELECT * FROM `lessons` WHERE classname='android_studio'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                   <?php do{ ?>
                                   <center>
                                   <video controls width="600" height="350">
                                               <source src="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>" type="video/mp4" >

                                    </video> <h4 style="color:maroon;font-family: 'Times New Roman', Times, serif;"><?php echo $row["title"]; ?></h4>
                                   </center>

                                <?php }while($row=mysql_fetch_assoc($recordSet));?>                       
                    </div>
                    </div>
                    </div>
                     </div>
        <div class="row" id="documents" style="display:none">
          <div class="span8">
                <div class="box pattern pattern-sandstone">
                    <div class="box-header">
                        <i class="icon-list"></i>
                        <h5>Documents</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list collapse in">

                        <ul>
                             <?php
                                    include '../../adminpanel/ConPage.php';
                                      $recordSet=
                                      mysql_query("SELECT * FROM `documents` WHERE classname='android_studio'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                   <?php do{ ?>
                            <li>
                                <div>
                                    <p class="news-item-title" style="color:brown">Lesson# <?php echo $row["lessonid"]; ?></p>
                                    <p class="news-item-preview"><?php echo $row["body"]; ?></p><br>
                                    <a download="<?php echo $row["file"]; ?>" href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a>
                                </div>
                            </li>
                            <?php }while($row=mysql_fetch_assoc($recordSet));?> 
                        </ul>


                    </div>

                </div>
            </div>       
          <div class="span8" id="homework" style="display:none">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Home Work Submision Form</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline" method="POST" action="">
                            <p>Assignment ...</p>
                             <div class="input-prepend">    
                                <textarea class="span7" placeholder="Relevant to your assignment..." rows="3" cols="30" name="bodyText"></textarea><br>
                                <input type="file" name="file"><br>
                                <h5 id="vo">Voice message goes here...</h5>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="passwo" placeholder="type your password">
                            </div><br>
                    <div class="form-group" style="display:none">
                     <label> Class Name </label>
                    <input class="form-control" type="text" value="android_studio" name="classname">
                    </div>
                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Submit
                        </button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>


    <?php
             
         include '../../adminpanel/ConPage.php';
         

         if(isset($_POST["bodyText"])){
            
          $bodytext=$_POST["bodyText"];
          $file=$_POST["file"];
          $classname=$_POST["classname"];
          $passwo=$_POST["passwo"];
          $date=date("y/m/d");
        
          if ($passwo =="" ) {
            echo "<span style='color:red;'> Insert your password !!!</span>";
          }
          else
          {
            $recordSet=
            mysql_query("SELECT * FROM `student` WHERE password='$passwo'",$con);
            $row=mysql_fetch_assoc($recordSet);
            $name=$row["name"];
            $fname=$row["fname"];

            $query="INSERT INTO `homework` (`name`, `fname`,`body`, `file`, `classname`,`Date`) 
            VALUES ('$name', '$fname','$bodytext', '$file', '$classname','$date');";
          mysql_query($query,$con);
                     //header("location:index.php");
            $Set=
            mysql_query("SELECT MAX(hid) as hid FROM `homework` WHERE classname='android_studio'",$con);
            $r=mysql_fetch_assoc($Set);
            $hid=$r["hid"];

          $notiQue="INSERT INTO `notification`(`classname`, `type`, `row_count`,`fid`) VALUES ('$classname','homework','1','$hid')";
            mysql_query($notiQue,$con);
        }
        }

?>
            
         <div class="row">
                 <div class="span8" id="attendence" style="display:none">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Attendene Form</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline" method="post" action="">
                            <p>Just Click Submit ...</p>
                            <select name="clickMe" >
                            <option value="I'm Present">I'm Present</option>
                            </select>
                            <div class="form-group">
                                <input class="form-control" type="password" name="pass" placeholder="type your password">
                            </div> 
                            <div class="form-group" style="display:none">
                                            <label> Class Name </label>
                                            <input class="form-control" type="text" value="android_studio" name="classname">
                                        </div> 
                        <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Submit
                        </button>
                    </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
               
            </div>
        </div>
<?php
             
         include '../../adminpanel/ConPage.php';
         

         if(isset($_POST["clickMe"])){
            
          $pass=$_POST["pass"];
          $classname=$_POST["classname"];
          $date=date("y/m/d");
        
          if ($pass =="" ) {
            echo "<span style='color:red;'> insert your password !!!</span>";
          }
          else
          {
            $recordSet=
            mysql_query("SELECT * FROM `student` WHERE password='$pass'",$con);
            $row=mysql_fetch_assoc($recordSet);
            $name=$row["name"];
            $image=$row["image"];

            $query="INSERT INTO `attendence` (`Sname`, `Simage`,`Date`, `classname`,`student_id`) 
            VALUES ('$name', '$image','$date', '$classname','$studentid');";
          mysql_query($query,$con);
          
          $recSet=
            mysql_query("SELECT * FROM `attendence` WHERE classname='android_studio'",$con);
            $rows=mysql_fetch_assoc($recSet);
            $da=$rows["Date"];
            $img=$rows["Simage"];


          if ($da != $date & $img != $image) {
    
          $notiQue="INSERT INTO `notification`(`classname`, `type`, `row_count`,`fid`) VALUES ('$classname','attendence','1','$studentid')";
            mysql_query($notiQue,$con);
             echo "Done...";
        }
            else{
            echo "<p style='color:red;'>You are present for today...</p>";
         }
        }
        }

?>
           <div class="row">
            <div class="span16" id="excer" style="display:none">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-sign-blank"></i>
                        <h5>Knowledge Check Form</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-hide-me box-content collapse out">
                        <legend class="lead" id="styl">
                            Who Is Intrusted With Excercise  
                        </legend>
                       <div class="box-content box-table">
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Score</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th class="td-actions">Welcome</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="images/4.jpeg" alt="" id="profile"> </td>
                                            <td> <span class="news-item-title" id="mname">Fatima "Talash"</span></td>
                                            <td>97%</td>
                                            <td>Well Done</td>
                                            <td>16-03-2018</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="box-footer">
                        <h5 id="ht">Study With Us To Have Bright Future</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>
<?php
      include'../layout/footer.php';
?>
    </body>
</html>