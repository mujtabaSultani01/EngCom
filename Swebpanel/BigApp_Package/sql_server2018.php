<?php
session_start();
 
  if (!isset($_SESSION['sqlServerlogin'])) {
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
    <script src="../Public/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="../public/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
</head>
    <body>

         <style>
        #body-content { padding-top: 40px;}
        #gal{

            border-radius: 20px;
            width: 125px;
            height: 80px;
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
          include '../layout/Cheader.php';
          ?>
        <div id="body-container">
            <div id="body-content">
                
                      <div class="body-nav body-nav-vertical" >
                        <div class="container">
                            <ul>
                                 <li>
                                    <a href="#" id="sched">
                                        <i><img id="ico" src="../public/images/icons/schedule.png"></i><br> Schedule
                                    </a>
                                </li>
                                 <li>
                                    <a href="#" id="instruc">
                                        <i><img id="ico" src="../public/images/icons/instruction.png"></i><br> Instructions
                                    </a>
                                </li> 
                                <li>
                                    <a href="sqlServer2018lesson.php" id="less">
                                        <i><img id="ico" src="../public/images/icons/lessons.png"></i><br> Lessons
                                    </a>
                                </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i><img id="ico" src="../public/images/icons/message.png"></i><br>Message
                        <b class="caret hidden-phone"></b>
                        </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" id="pmessage">
                                        <i><img id="ico" src="../public/images/icons/message.png"></i><br> Private message
                                    </a>
                                </li> 
                              <li>
                                    <a href="#" id="pumessage">
                                        <i><img id="ico" src="../public/images/icons/message.png"></i><br> Public message
                                    </a>
                                </li> 
                                    </ul>
                            </li>
                                <li>
                                    <a href="#" id="mark">
                                        <i><img id="ico" src="../public/images/icons/marks.png"></i><br> Marks
                                    </a>
                                </li>
                                 <li>
                                    <a href="#" id="classmates">
                                        <i><img id="ico" src="../public/images/icons/followers.png"></i><br> Followers
                                    </a>
                                </li>
                                 <li>
                                    <a href="#" id="too">
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
             <center>
                    <h3>Big_Programs Package<br/>
                            <small>SQL Server 2018</small>
                        </h3></center> 
                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                             <li  class="dropdown">
                         <?php
                                include '../../adminpanel/ConPage.php';
                                $studentid=$_SESSION['sqlServerlogin'];
                                $q=mysql_query("SELECT * FROM `student` WHERE st_id=$studentid",$con);
                                $row=mysql_fetch_assoc($q);
                                $userimage=$row["image"];
       
                            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'><img id='ico' style='width:40px; height:40px; border-radius: 20px;' src='../../public/images/services/$userimage'>

                            </a>"
                           ?>
                                 <ul class="dropdown-menu">
                                        <li>
                                            <a href='stu_profile.php?stid=<?php echo $studentid ?> & Clname=sql_server2018.php '>update profile</a>
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
            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
                        <h5>sql_server2018 Class Images</h5>
                    </div>
                        <?php
                          include '../../adminpanel/ConPage.php';
                          $recordSet = mysql_query("SELECT * FROM `gallery` WHERE classname = 'sql_server2018' ");
                          $row = mysql_fetch_assoc($recordSet);
                       
                        ?>
                        
                       
                    <div class="box-content">
                        <div class="btn-group-box">
                         <?php do{ ?>
                            <img id="gal" src="../../public/images/gallary/<?php echo $row["image"]; ?>"  width="126" >
                            <?php }while($row=mysql_fetch_assoc($recordSet));?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="span8">
                <div class="blockoff-left">
                    <legend class="lead">
                      <p>Welcome To <b id="bo">sql_server2018</b> Class</p>
                    </legend>
                    <p>
                        The compilation didicated to people who by the way are absorbed in, we truly present
                        you the skill which is used as well as spoken worldwide to get to you holy target through,
                        being able to use other sources to improve by your knowledge.
                  </p>
                </div>

            </div>
          </div> 
           <div class="row">
            <div class="span16" id="tool" style="display:none">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-sign-blank"></i>
                        <h5>Other Relevant Resources </h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-hide-me box-content collapse out">
                        <legend class="lead" id="styl">
                            Try To Use 
                        </legend>
                       <div class="box-content box-table">
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>File</th>
                                            <th>References</th>
                                        </tr>
                                    </thead>
                                     <?php
                                     include '../../adminpanel/ConPage.php';
                                      $recordSet=
                                      mysql_query("SELECT * FROM `extool` WHERE classname='sql_server2018'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row["eid"]; ?></td>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td><a href="\EngCom\Sadminpanel\Videos/<?php echo $row["file"]; ?>"><?php echo $row["file"]; ?> </a></td>
                                            <td><?php echo $row["reference"]; ?></td>
                                        </tr>
                                    </tbody>
                                     <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                            </div>
                    </div>
                    <div class="box-footer">
                        <h5 id="ht">Donʻt focus only internal tool, Check other sources</h5>
                    </div>
                </div>
            </div>
        </div>
             <div class="row">
                 <div class="span8" id="marks" style="display:none">
                        <div class="box pattern pattern-sandstone">
                            <div class="box-header">
                                <i class="icon-table"></i>
                                <h5>
                                    Marks Obtained
                                </h5>
                            </div>
                            <div class="box-content box-table">
                                <?php
                                      $records=
                                      mysql_query("SELECT DISTINCT test_name FROM `stu_marks` WHERE classname='sql_server2018'",$con);
                                      $rows=mysql_fetch_assoc($records);
                                    ?>
                                   <?php do{ ?>
                                 <?php  $testname=$rows["test_name"];?>

                                <h5 style="color:#48D1CC"><b><?php echo $rows["test_name"]; ?></b></h5>
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                       <?php
                                      $recordSet=
                                      mysql_query("SELECT stu_name,stu_Fname,marks FROM `stu_marks` WHERE (classname='sql_server2018' AND test_name='$testname') AND (stu_name='$user_name' AND stu_Fname='$user_fname')",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                   <?php do{ ?>
                                    <tbody>
                                        <tr>
                                            
                                            <td><?php echo $row["marks"]; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
                                <?php }while($rows=mysql_fetch_assoc($records));?>

                                 <h5 style="color:#DB7093;"><b>Final Result</b></h5>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>F/name</th>
                                            <th>Marks (100%)</th>
                                            <th>Grade</th>
                                        </tr>
                                    </thead>
                                    <?php
                                      $rec=
                                      mysql_query("SELECT stu_name,stu_Fname,SUM(marks) as total FROM `stu_marks` WHERE classname='sql_server2018' GROUP BY stu_name ORDER BY total DESC",$con);
                                      $r=mysql_fetch_assoc($rec);
                                      $grade=0;
                                    ?>
                                    <?php do{
                                        
                                        $sname=$r["stu_name"];
                                        $sfname=$r["stu_Fname"];
                                        $grade=$grade+1;
                                       if ($user_name == $sname && $user_fname == $sfname) {
                                           $fgrade=$grade;
                                       }
                                     ?>
                                     <?php }while($r=mysql_fetch_assoc($rec));?>
                                    <tbody>
                                        <?php
                                      $re=
                                      mysql_query("SELECT stu_name,stu_Fname,SUM(marks) as total FROM `stu_marks` WHERE classname='sql_server2018' AND (stu_name='$user_name' AND stu_Fname='$user_fname') GROUP BY stu_name ORDER BY total DESC",$con);
                                      $ro=mysql_fetch_assoc($re);
                                      
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $ro["stu_name"]; ?></td>
                                            <td><?php echo $ro["stu_Fname"]; ?></td>
                                            <td><?php echo $ro["total"]; ?></td>
                                          <?php  if ( $ro["total"]>59) {?>
                                              
                                            <td style="color:#0000CD;"><?php echo "grade_".$fgrade ?></td>
                                            <?php } else{?>

                                            <td style="color:red;"><?php echo "Failed"; ?></td>
                                            <?php }?>
                                            
                                             
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="box" id="coursefollwers" style="display:none">
                            <div class="box-header">
                                <i class="icon-user icon-large"></i>
                                <h5>Course Followers</h5>
                            </div>
                            <div class="box-content">
                           
                           <table>

                              <?php
                             include '../../adminpanel/ConPage.php';
                             $recordSet=
                             mysql_query("SELECT * FROM `student` as stu, `attend` as att WHERE stu.image!='$userimage' AND (stu.st_id=att.stid AND att.clname='sql_server2018')",$con);
                             $row=mysql_fetch_assoc($recordSet);


                             // $que=mysql_query("SELECT smg.image FROM `smessage` as smg,`student` as stu WHERE stu.st_id=smg.sid AND smg.image IN( SELECT stu.image FROM `student` as stu, `attend` as att WHERE stu.st_id=att.stid AND att.clname='sql_server2018')");
                             // $rows=mysql_fetch_assoc($que);
                              ?>
                            <?php do{ ?>

                           <tr>
                           <td><img style="width:50px; height:50px;" src="../../public/images/services/<?php echo $row["image"]; ?>" alt="" id="profile"> </td>
                           <td><span class="news-item-title" id="mname"><b>'<?php echo $row["uname"]; ?>'</b> </span></td>
                           <td></td> <td></td><td></td>
                           <td><i><a href="stu_message/msg-bet-stu-sqlserver.php?stid=<?php echo $row["image"]; ?>"><img src="../public/images/icons/small/message.png"></a></i></td> 
                            </tr>
                            <?php }while($row=mysql_fetch_assoc($recordSet));?>

                        </table>
                   </div>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="span8" id="publicmessage" style="display:none">
               <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Public Message Box</h5>
                    </div>
                   <div class="box-content">
                     <div class="form-group">
                    <?php
                        $recordSet=
                         mysql_query("SELECT * FROM `smessage` WHERE classname='sql_server2018' AND type='public' ",$con);
                        $row=mysql_fetch_assoc($recordSet);
                    ?>
                    <?php do{ ?>
                    
                         <label style='color:brown;background-color:hsla(120,100%,75%,0.3); border-radius: 10px;'><img src='../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'> <?php echo $row["body"]; ?></label>
                     <?php }while($row=mysql_fetch_assoc($recordSet));?>
                    </div>
                        <form class="form-inline" method="post" action="">
                           <br> 

                            <div class="form-group" style="display:none">
                     <label> Class Name </label>
                    <input class="form-control" type="text" value="sql_server2018" name="classname">
                    </div>
                    <div class="form-group" style="display:none">
                     <label> Message Type </label>
                    <input class="form-control" type="text" value="public" name="public">
                    </div>

                           <div class="box-footer">    
                                <input type="text" name="pubody" style="width:370px; height:25px;" placeholder="type message..." >
                                <input type="submit" name="submit" value="Send" style="width:80px;" class="btn btn-primary">
                            </div><br>
                        </form>
                    </div>
                    
                </div>
            </div>
             <?php
             
         include '../../adminpanel/ConPage.php';
         

         if(isset($_POST["pubody"])){
            
          $body=$_POST["pubody"];
          $classname=$_POST["classname"];    
          $type=$_POST["public"];    
          if ($body =="" ) {
            echo "<span style='color:red;'> Fill the body field !!!</span>";
          }
          else
          {
            $query="INSERT INTO `smessage` (`body`,`image`,`type`, `classname`) 
            VALUES ('$body','$userimage','$type', '$classname');";
          mysql_query($query,$con);
                     //header("location:index.php");
               $Set=
            mysql_query("SELECT MAX(id) as mid FROM `smessage` WHERE classname='sql_server2018'",$con);
            $r=mysql_fetch_assoc($Set);
            $mid=$r["mid"];

            $notiQue="INSERT INTO `notification`(`classname`, `type`, `row_count`,`fid`) VALUES ('$classname','public','1','$mid')";
            mysql_query($notiQue,$con);
        }
        }

?>
              <div class="span8" id="privatemessage" style="display:none">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Private Message Box</h5>
                    </div>
                    <?php 
                    include '../../adminpanel/ConPage.php';
                    $recSet=
                    mysql_query("SELECT msg.password FROM `smessage` as msg WHERE msg.image='$userimage' AND msg.type='private'",$con);
                    $rows=mysql_fetch_assoc($recSet);
                     $upass= $rows["password"];
                     ?>
                    <div class="box-content">
                        <div class="form-group">
                    <?php // SELECT * FROM `smessage`,`student` WHERE student.password=smessage.password AND classname='sql_server2018' 
                          
                        $recordSet=
                         mysql_query("SELECT * FROM smessage WHERE (smessage.type='Private' AND smessage.password='$upass') AND (smessage.image='$userimage' OR smessage.image NOT IN( SELECT student.image FROM student )) ",$con);
                        $row=mysql_fetch_assoc($recordSet);
                    ?>
                    <?php do{ ?>
                     <label style='color:brown;background-color:hsla(120,100%,75%,0.3); border-radius: 10px;'><img src='../../public/images/services/<?php echo $row["image"]; ?>' style='border-radius: 13px; width:50px; height:50px'> <?php echo $row["body"]; ?></label>
                     <?php }while($row=mysql_fetch_assoc($recordSet));?>
                    </div>
                        <form class="form-inline" method="post" action="">
                            <br>
                            <div class="form-group" style="display:none">
                     <label> Class Name </label>
                    <input class="form-control" type="text" value="sql_server2018" name="classname">
                    </div>
                    <div class="form-group" style="display:none">
                     <label> Message Type </label>
                    <input class="form-control" type="text" value="private" name="private">
                    </div>
                            <div class="box-footer">    
                                <input type="text" name="prbody" style="width:475px; height:25px;" placeholder="type message..." ><br>
                                <input class="form-control" type="password" name="pass" placeholder="type your password" style="width:390px; height:25px;">
                                <input type="submit" name="submit" value="Send" style="width:80px;" class="btn btn-primary">
                                
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
             
         include '../../adminpanel/ConPage.php';
         

         if(isset($_POST["prbody"])){
            
          $body=$_POST["prbody"];
          $pass=$_POST["pass"];
          $classname=$_POST["classname"];
          $type=$_POST["private"];
        
          if ($pass =="" ) {
            echo "<span style='color:red;'> insert your password !!!</span>";
          }
          else
          {
            $query="INSERT INTO `smessage` (`body`, `image`,`type`, `classname`, `password`) 
            VALUES ('$body','$userimage','$type', '$classname', '$pass');";
          mysql_query($query,$con);
                    
                         $Set=
            mysql_query("SELECT MAX(id) as mid FROM `smessage` WHERE classname='sql_server2018'",$con);
            $r=mysql_fetch_assoc($Set);
            $mid=$r["mid"];

            $notiQue="INSERT INTO `notification`(`classname`, `type`, `row_count`,`fid`) VALUES ('$classname','public','1','$mid')";
            mysql_query($notiQue,$con);
        }
        }

?>
          <div class="row"> 
             <div class="span8" id="instrutions" style="display:none">
                        <div class="box">
                            <div class="box-header">
                                <i class="icon-folder-open"></i>
                                <h5>Teacher Instructions </h5>
                            </div>
                            <div class="box-content">
                                <?php
                                    include '../../adminpanel/ConPage.php';
                                      $recordSet=
                                      mysql_query("SELECT * FROM `tinstruction` WHERE classname='sql_server2018'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                <p id="par">
                                <?php echo $row["body"]; ?>
                                </p>
                                <p id="vo">Voice Message goes here</p>
                                <p id="da"><?php echo $row["date"]; ?></p>
                                <?php }while($row=mysql_fetch_assoc($recordSet));?>
                            </div>
                        </div>
                    </div>
                       <div class="span8" id="schedule" style="display:none">
                        <div class="box pattern pattern-sandstone">
                            <div class="box-header">
                                <i class="icon-calendar icon-large"></i>
                                <h5>
                                    Schedule
                                </h5>
                            </div>
                            <div class="box-content box-table">
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>Day</th>
                                            <th>Issues To Be Cover</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include '../../adminpanel/ConPage.php';
                                      $recordSet=
                                      mysql_query("SELECT * FROM `schedule` WHERE classname='sql_server2018'",$con);
                                      $row=mysql_fetch_assoc($recordSet);
                                    ?>
                                    <?php do{ ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row["day"]; ?></td>
                                            <td><?php echo $row["issue"]; ?></td>
                                            <td><?php echo $row["date"]; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php }while($row=mysql_fetch_assoc($recordSet));?>
                                </table>
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
      
      include '../layout/footer.php';
   ?>
    </body>
</html>