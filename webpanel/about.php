<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <title>about</title>
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
				<li><a href="../webpanel/index.php">Home</a></li>
				<li>About Us</li>			
			</div>		
		</div>	
	</div>
	
	<div class="aboutus">
		<div class="container">
			<h3>Let's See This Section</h3>
			<hr>
		<?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `courseinfo` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="../public/images/<?php echo $row["image"]; ?>" class="img-responsive">
				<h4><?php echo $row["title"]; ?></h4>
				<p><?php echo $row["body"]; ?></p>
			</div>
			<?php }while($row=mysql_fetch_assoc($recordSet));?>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="skill">
					<h2>Improve Your Skills</h2>
					<p>Everything you can learn in every class will be needed some day. Learn all you can about as many things as you can.</p>

					<div class="progress-wrap">
						<h3>Reading</h3>
						<div class="progress">
						  <div class="progress-bar  color1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
							<span class="bar-width">99%</span>
						  </div>

						</div>
					</div>

					<div class="progress-wrap">
						<h4>Writing</h4>
						<div class="progress">
						  <div class="progress-bar color2" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
						   <span class="bar-width">97%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h4>Listning</h4>
						<div class="progress">
						  <div class="progress-bar color3" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%">
							<span class="bar-width">96%</span>
						  </div>
						</div>
					</div>

					<div class="progress-wrap">
						<h4>Grammar</h4>
						<div class="progress">
						  <div class="progress-bar color4" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
							<span class="bar-width">95%</span>
						  </div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
 <div class="our-team">
        <div class="container">
            <h3>English Team</h3>   
            <div class="text-center">
               <?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `employees` WHERE degree='English_Teacher' ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    
                    <img src="../public/images/services/<?php echo $row["image"]; ?>" alt="" width="200" height="250">
                    <h4><?php echo $row["name"]; ?></h4>
                    <p><?php echo $row["Description"]; ?></p>
                    
                </div>
               <?php }while($row=mysql_fetch_assoc($recordSet));?>
            </div>
        </div>
    </div>
    <div class="our-team">
        <div class="container">
            <h3>Computer Team</h3>   
            <div class="text-center">
              <?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `employees` WHERE degree='Computer_Teacher'",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    
                    <img src="../public/images/services/<?php echo $row["image"]; ?>" alt="" width="200" height="250">
                    <h4><?php echo $row["name"]; ?></h4>
                    <p><?php echo $row["Description"]; ?></p>
                    
                </div>
               <?php }while($row=mysql_fetch_assoc($recordSet));?>
            </div>
        </div>
    </div>
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