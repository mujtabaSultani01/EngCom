<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <title>portfolio</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/website/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/website/animate.css">
    <link href="../public/css/prettyPhoto.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet" /> 
    <style type="text/css">
            #bor{
               
                margin: 5px;
                }

    </style> 
  </head>    
  <body>
	 <?php
      include '../layout/header.php';
   ?>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Published</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio">	
        <div class="container">
            <div class="center">
               <p>Decide now that the coming year will be your best ever. Enter it with a positive attitude.</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter="*">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->
		</div>
        
		<div class="container">

            <div class="">
                
                <div class="portfolio-items">
        <?php
          include '../adminpanel/ConPage.php';
          $recordSet=
          mysql_query("SELECT * FROM `products` ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-4">
                        <div class="recent-work-wrap">
                            <table id="bor">
                           <tr><td> <img style="border-radius:20px; width:180; height:230px;" class="img-responsive" src="../public/images/portfolio/full/<?php echo $row["image"]; ?>" alt=""></td></tr>
                            <div class="overlay">
                                <div class="recent-work-inner">
                                   <tr><td><h3><a href="#"><?php echo $row["name"]; ?></a></h3></td></tr>
                                   <tr><td><p><?php echo $row["body"]; ?></p></td></tr> 
                                   <tr><td> <a class="preview" href="../public/images/portfolio/full/<?php echo $row["image"]; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></td></tr>
                              
                                </div> 
                            </div>
                            </table>
                        </div>
                    </div><!--/.portfolio-item-->
                   <?php }while($row=mysql_fetch_assoc($recordSet));?> 
                </div>

            </div>
        </div>
          
    </section><!--/#portfolio-item-->
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