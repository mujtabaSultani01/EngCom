<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <title>blog</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/website/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/website/animate.css">
    <link href="../public/css/prettyPhoto.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet" />  
  </head>
  <body>
	 <?php
      include '../layout/header.php';
   ?>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Blog</li>			
			</div>		
		</div>	
	</div>
	
	<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
        <?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `blog` WHERE postman='Administrator' ",$con);
          $row=mysql_fetch_assoc($recordSet);
        ?>
        
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="../public/images/blog/<?php echo $row["image"]; ?>" width="100%" alt="" /></a>
                                <h3 style="color:red">Administrator: </h3><h4><?php echo $row["title"]; ?></h4>
                                <p><?php echo $row["body"]; ?></p>
                                <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>   
                    </div><!--/.blog-item-->
                        <div class="blog-item">
        <?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `blog` WHERE postman='Executive Officer' ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="../public/images/gallary/<?php echo $row["image"]; ?>" width="100%" alt="" /></a>
                                <h3 style="color:red">Executive Officer: </h3><h4><?php echo $row["title"]; ?></h4>
                                <p><?php echo $row["body"]; ?></p>
                                <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>  
                    </div><!--/.blog-item-->
                </div>
                

                <!--/.col-md-8-->

                <aside class="col-md-4">
    				<div class="widget categories">
                        <h3 style="color:brown">Course History</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
<!--                                     <img src="../public/images/blog/avatar3.png" alt=""  />
 -->                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computer Apps<span class="badge">05</span></a></li>
                                    <li><a href="#">English Classes <span class="badge">3</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    				<div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        
                        <ul class="sidebar-gallery">
        <?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `gallery` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
           <li><a href="#"><img style="width:100px;height:80px;" src="../public/images/gallary/<?php echo $row["image"]; ?>" alt="" /></a></li>
                <?php }while($row=mysql_fetch_assoc($recordSet));?>
                        </ul>
                      
                    </div><!--/.blog_gallery-->
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
	
	 <?php
      include '../layout/footer.php';
   ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../public/js/jquery-2.1.1.min.js"></script>   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.prettyPhoto.js"></script>
    <script src="../public/js/jquery.isotope.min.js"></script>  
    <script src="../public/js/wow.min.js"></script>
    <script src="../public/js/functions.js"></script>
    
	
  </body>
</html>