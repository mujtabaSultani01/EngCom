  <!DOCTYPE html>

 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Student_login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../../public/cssl/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../public/cssl/style.css" />
		<link rel="stylesheet" type="text/css" href="../../public/cssl/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Update Account-><span> "Lemar Academy"</span></h1>
            </header>
            <section>				
                <div id="container_demo" id="student" style="">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div class="animate form" id="login">
                            <form  method="POST" action="" enctype="multipart/form-data"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> first name</label>
                                    <input id="usernamesignup" name="firstname" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> father name</label>
                                    <input id="usernamesignup" name="fathername" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                   <label for="image" data-icon="u" > image</label>
                                   <input type="file" name="image">
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                   </p>
                     <label for="usernamesignup" class="uname"> Class name</label><br>
                    <select  name="classname">
                      <?php
                        include '../ConPage.php';
                        $recordSet=
                        mysql_query("SELECT * FROM `class` ",$con);
                        $row=mysql_fetch_assoc($recordSet);
                     
                      ?>
                      <?php do{ ?>
                                  <option><?php echo $row["cl_name"]; ?></option>
                        <?php }while($row=mysql_fetch_assoc($recordSet));?>
                        </select>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"> password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="rpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="submit" value="Update"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
                  <!-- #tologin -->
									<a href="slogin.php" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        
	 <?php

         $getID=$_GET["stid"];
             
         include '../ConPage.php';
         
         if(isset($_POST["firstname"])){

          $target= "images/".basename($_FILES['image']['name']);
          $image = $_FILES['image']['name'];
          
          $finame=$_POST["firstname"];
          $uname=$_POST["username"];
          $fname=$_POST["fathername"];
          $email=$_POST["email"];
          $classname=$_POST["classname"];
          $password=$_POST["password"];
          $rpassword=$_POST["rpassword"];
          
        
            if ($password == $rpassword) {


              $recordSet=
              mysql_query("SELECT st.st_id FROM `student` as st WHERE st.image='$getID' ",$con);
            $row=mysql_fetch_assoc($recordSet);
              $stid=$row["st_id"];
                
                 $query="UPDATE `student` SET `name`='$finame',`uname`='$uname',`fname`='$fname',`email`='$email',`password`='$password',`image`='$image' WHERE `st_id`=$stid ";
          $q=mysql_query($query,$con);
                  

            // $attque="INSERT INTO `attend` (`clname`, `stid`) 
            // VALUES ('$classname', '$stid');";

              $attque="UPDATE `attend` SET `clname`='$classname' WHERE `stid` = $stid";
              
              mysql_query($attque,$con);
              echo "</br>";
              echo "account Updated.";
            }
            else{
              echo "<span style='color:red;'>Your Password don't match!!!</span>";    
      }

        }

?>
</div>

                    </div>
                </div> 
            </section>
        </div>
    </body>
</html>

























                