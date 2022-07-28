<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <title>index</title>
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
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(../public/images/slider/index.JPG);width:1350px;height:680px;">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Eng-Com<span> LMS </span></h2>
                                    <p class="animation animated-item-2" style="color:#FFFACD;">Bright your future with new<br> technology systems and imporve<br> your buisness with facilities<br> through technology.</p>
                                    <a class="btn-slide animation animated-item-3" href="#R1">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <!-- <div class="slider-img">
                                    <img src="../public/images/slider/Khan_con.png" class="img-responsive">
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	<div class="feature">
		<div class="container">
			<div class="text-center">
		<?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `favorites` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-<?php echo $row["icon"]; ?>"></i>	
						<h2><?php echo $row["title"]; ?></h2>
						<p><?php echo $row["body"]; ?></p>
					</div>
				</div>
			<?php }while($row=mysql_fetch_assoc($recordSet));?>
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
	<div class="lates">
		<div class="container">
			<div>
				<h2>Let's See this...</h2>
			</div>
		<?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `news` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img style="width:400px;height:200px;" src="../public/images/<?php echo $row["image"]; ?>" class="img-responsive"/>
				<h3><?php echo $row["title"]; ?></h3>
				<p><?php echo $row["body"]; ?>
				</p>			
			</div>
			<?php }while($row=mysql_fetch_assoc($recordSet));?>	
		</div>
	</div>
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Accept your teachers as talented and qualified professionals who will do their best to help you become a better student. Some of my best friends were my teachers. +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->	
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