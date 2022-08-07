 <?php

                        include '../ConPage.php';

                        session_start();
                        if(isset($_POST["usname"])){

                            $uname=$_POST["usname"];
                            $pass=$_POST["password"];
                        $res=
                        mysql_query("SELECT * FROM `users` WHERE uname='$uname' AND password='$pass' ",$con);
                        $row=mysql_fetch_assoc($res);
                        echo "wait...";
                        echo "</br>";
                        $img=$row['image'];
                        $type=$row["type"];

                        if (mysql_num_rows($res) > 0 ) {

                            if ($type=="admin") {
                                
                                $_SESSION['loginAsAdmin'] = $img;
                                header("location:../../Sadminpanel/index.php");
                            }
                           else{
                            $_SESSION['loginAsUser'] = $img;
                            header("location:../A_index.php");

                        }
                    }
                        else{
                            echo "<h3 style='color:red'>Opps!!! username and password don't match.</h3>";
                        }
                    }
                      ?>

<!DOCTYPE html>

 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Admin_Login</title>
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
                <h1>Login As Admin To -><span> "Lemar Academy"</span></h1>
            </header>
            <section>               
                <div id="container_demo" id="teacher" style="">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="POST" action="" enctype="multipart/form-data"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="usname" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p> 
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Login" /> 
                                </p>
                            </form>
                            </div>
                    </div>
                </div> 
            </section>
        </div>
    </body>
</html>