  <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="../adminpanel/A_index.php" class="logo">Eng <span class="lite">Com</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
         
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                               <?php
                                $userimage=$_SESSION['loginAsUser'];

                            echo "<img style='width:40px; height:40px; border-radius: 20px;' src='../public/images/services/$userimage'>";
                           ?>
                              <!-- <img src="../public/img/muj.jpg"> -->
                            </span>
                             <?php  
                    include '../adminpanel/ConPage.php';
                    $qu=mysql_query("SELECT * FROM `users` WHERE image='$userimage'" ,$con);
                    $trow=mysql_fetch_assoc($qu);
                    $uid=$trow["uid"];
                    ?>
                            <span class="username"><?php echo $trow["uname"]; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="userProfile.php?uid=<?php echo $uid ?>"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="../Sadminpanel/layout/logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
 
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="../adminpanel/A_index.php">
                          <i class=""><img id="ico" src="../public/icons/home.png" height="25" width="25"></i>
                          <span>Home</span>
                      </a>
          </li>
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class=""><img id="ico" src="../public/icons/services.png" height="25" width="25"></i>
                          <span>Services</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../adminpanel/A_package.php"><img id="ico" src="../public/icons/packages.png" height="25" width="25">  Package</a></li>
              <li><a class="" href="../adminpanel/A_Services.php"><img id="ico" src="../public/icons/classes.png" height="25" width="25">  Classes</a></li>
            </ul>
          </li>
           <li>
            <a class="" href="../adminpanel/A_Employees.php">
                          <i><img id="ico" src="../public/icons/employee.png" height="25" width="25"></i>
                          <span>Employees</span>

                      </a>

          </li>
           <li>
            <a class="" href="../adminpanel/A_Products.php">
                          <i><img id="ico" src="../public/icons/project.png" height="25" width="25"></i>
                          <span>Published</span>

                      </a>

          </li>
           <li>
            <a class="" href="../adminpanel/A_News.php">
                          <i><img id="ico" src="../public/icons/news.png" height="25" width="25"></i>
                          <span>News</span>

                      </a>

          </li>
           <li>
            <a class="" href="../adminpanel/A_Gallery.php">
                          <i><img id="ico" src="../public/icons/gallery.png" height="25" width="25"></i>
                          <span>Gallery</span>

                      </a>

          </li>
          <li>
            <a class="" href="../adminpanel/A_Favorites.php">
                          <i><img id="ico" src="../public/icons/favorites.png" height="25" width="25"></i>
                          <span>Favorites</span>

                      </a>

          </li>
          <li>
            <a class="" href="../adminpanel/A_ourCompany.php">
                          <i><img id="ico" src="../public/icons/ourcompany.png" height="25" width="25"></i>
                          <span>Our-Center</span>

                      </a>

          </li>
          <li>
            <a class="" href="../adminpanel/A_blog.php">
                          <i><img id="ico" src="../public/icons/announcement.png" height="25" width="25"></i>
                          <span>Announcement</span>

                      </a>

          </li>
          <li>
            <a class="" href="../adminpanel/A_Contact.php">
                          <i><img id="ico" src="../public/icons/message.png" height="25" width="25"></i>
                          <span>Message</span>

                      </a>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>