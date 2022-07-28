<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <title>contact</title>
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
				<li>Contact</li>			
			</div>		
		</div>	
	</div>
	
	<div class="map">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
	</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p>Send any things that are going in your mind .</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="">
                
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Center Name</label>
                            <input type="text" name="companyName" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 

                                            <?php
             
         include '../adminpanel/ConPage.php';
         
         if(isset($_POST["email"])){

          $name=$_POST["name"];
          $email=$_POST["email"];
          $phone=$_POST["phone"];
          $companyName=$_POST["companyName"];
          $subject=$_POST["subject"];
          $message=$_POST["message"];

          
        
          if ($name =="" || $email =="" || $phone =="" || $companyName =="" || $subject =="" || $message =="" ){
            echo "<span style='color:red;'>please fill all the fields!!!</span>";
          }
          else
          {

          // $file=$_FILES["file"];
          // move_uploaded_file($file["tmp_name"], "\EngCom\Sadminpanel\Videos/" .$file["name"]);

            $query="INSERT INTO `messages` (`name`, `subject`, `message`, `email`, `phone`, `companyName`) 
            VALUES ('$name', '$subject', '$message', '$email', '$phone', '$companyName');";
          mysql_query($query,$con);
                     //header("location:index.php");
          echo "Message has been sent...";
        }
        }

?>


            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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