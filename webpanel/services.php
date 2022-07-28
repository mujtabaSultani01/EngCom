<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <title>services</title>
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
				<li>Services</li>			
			</div>		
		</div>	
	</div>
	<div class="services">
		<div class="container">
			<h3>English Services</h3>
			<hr>
			
		<?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `servicepackage` ",$con);
          $row=mysql_fetch_assoc($recordSet);

         do{
         	$package_name=$row["packagename"];
         ?><div class="col-md-12">
         <div class="col-md-7">
				<img style="width:530px;height:300px;border-radius:20px;" src="../public/images/packageImages/<?php echo $row["packageimage"]; ?>" class="img-responsive">
				 <h3><?php echo $row["packagename"]; ?></h3><p><?php echo $row["packagebody"]; ?></p>
				 <hr>
			</div>
			<div class="media">
		  <ul>

		<?php
          $records=
          mysql_query("SELECT * FROM `services` WHERE package='$package_name' ",$con);
          $rows=mysql_fetch_assoc($records);
        ?>
        			 <?php do{ ?>
						<li>
							<div class="media-left">
								<i class="fa fa-<?php echo $rows["icon"]; ?>"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $rows["classname"]; ?></h4>
								<p><?php echo $rows["body"]; ?></p>
							</div>
						</li>
						<?php }while($rows=mysql_fetch_assoc($records));?>
					</ul>
				</div>
			</div>
			<?php }while($row=mysql_fetch_assoc($recordSet));?>
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