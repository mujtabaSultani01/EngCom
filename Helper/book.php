<!DOCTYPE html>
<html>
<head>
<title>Kandahr_Library</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
      <script src="NewAssignment.js"></script>
      <script type="text/javascript">

      $(document).ready(function(){

        $("#b3").click(function(){
        $("#imgdiv").fadeOut();
        $("#viewusers").fadeOut();
        $("#t").fadeIn();

     });



        $("#b1").click(function(){
          $("#imgdiv").fadeOut();
        $("#t").fadeOut();
        
        $("#viewusers").fadeIn();

     });

      });


      </script>


  <style type="text/css">

      #about{

        color:  red;
        font-size: 45;
        font-family: Times New Roman;
      }
      #h{

        color: black;
        font-family: Times New Roman;
      }
      #Minudiv{
  width: 20%;
  height: 440px;
  /*background-color: #ddddff;*/
  color: black;
  float: left;
  text-align: center;
  font-size: 20;
  font-style: Times New Roman;
  margin: 10px;
  border: groove;
  border-radius: 10px;
}
      #Workdive{
        margin: 10px;
        padding: 20px;
        border: groove;
        border-radius: 15px;
/*        background-color: white;
*/        color: black;
background-image: "a.jpg";

        height: 400px;
        width: 70%;
        text-align: center;
        float: right;

      }
      #b1,#b3{

   width: 120px;
   height: 50px;
   /*background-color: #ddddff;
   border: groove;
   border-radius: 12px;*/
   background-color: white;
   margin-right: 50px;
   margin-bottom: 10px;
   margin-top: 10px;
   
   }
   #Minudiv li{
    display: inline;
   }
   #t{
    display: none;
    color: black;
    background-color: white;
    border: groove;
    border-radius: 10px;
    border-color: blue;
   }
   #viewusers{
    color: black;
    display: none;

   }
   #divimg{
    width: 680px;
    height: 380px;
    
   }
   #imgdiv{
    width: 680px;
    height: 380px;
    border: groove;
    border-radius: 10px;
   }
  #img1{
    width: 970px;
    height: 450px;
  }
  #img2{
    height: 260px;
    width: 250px;
  }

  </style>
</head>

<body id="top">
<div class="wrapper row1">
<!--   Header start -->  
    <?php
   include 'header.php';
    ?>
<!--   End header -->
</div>

<?php
  include 'LinkBePages.php';
?>
<div class="wrapper"> 
  <!-- <div id="slider">  -->      

    <div id="slide-wrapper" class="rounded clear"> 
      <div id="Minudiv">Select Your Favorite
          
          <ul><br><center>
            <li><button id="b1">Books list</button></li><br>
            <li><button id="b3">Add books</button></li><br>
            <li><button id="b1">...</button></li><br>
            <li><button id="b3">...</button></li><br>
            </center>
             </ul>


      </div>
      <div id ="Workdive">Manage Books<br> <div id="imgdiv"><img src="images/eBook22.jpg" id="divimg"></div> 

        <!-- <table id="t">
      <form method="post"><br>
        <tr><td>ID:</td><td><input type="number" name="ID"></td></tr><br>
        <tr><td>Name:</td><td><input type="text" name="Full_Name" placeholder="insert book name"></td></tr><br>
        <tr><td>Language:</td><td><input type="text" name="Language" placeholder="insert language"></td></tr><br>
        <tr><td>Category:</td><td><input type="text" name="Category" placeholder="insert Category"></td></tr><br>
        <tr><td>Edition:</td><td><input type="text" name="Type" placeholder="insert book edition"></td></tr><br>
        <tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>


      </form>
    </table> -->

    <?php

      //   include 'dbCon.php';

      //   if (isset($_POST["submit"])) {
      //     $id=$_POST["ID"];
      //     $fname=$_POST["Full_Name"];
      //     $uname=$_POST["UserName"];
      //     $pwd=$_POST["Password"];
      //     $type=$_POST["Type"];
      //     if ($id =="" || $fname =="" || $uname =="" || $pwd =="" || $type =="") {
      //       echo "<span style='color:red;'>please fill all fields!!!</span>";
      //     }
      //     else
      //     {
      //       $query="INSERT INTO librarian_tbl values($id,'$fname','$uname','$pwd','$type')";
      //     mysql_query($query,$con);
      //                //header("location:My Account.php");
      //     echo "Done...";
      //   }
      // }

    ?>

      <table border="1" id="viewusers">

        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Language</th>
          <th>Edition</th>
          <th>Category</th>
          <th>Picture</th>
          <th>Au_id</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>

        <?php
          include 'dbCon.php';
          $recordSet=
          mysql_query("SELECT * FROM `library_items`,book WHERE `library_items`.ID=`book`.Lib_Item_id ",$con);
          $row=mysql_fetch_assoc($recordSet);
       
        ?>
        
        <?php do{ ?>
        <tr>
          <td> <?php echo $row["ID"]; ?></td>
          <td> <?php echo $row["Name"]; ?></td>
          <td> <?php echo $row["Language"]; ?></td>
          <td> <?php echo $row["Edition"]; ?></td>
          <td> <?php echo $row["Category"]; ?></td>
          <td> <?php echo $row["Picture"]; ?></td>
          <td> <?php echo $row["Author_id"]; ?></td>
          <td> <a href="#.php?ID=<?php echo $row["ID"]; ?>">Modify</a></td>
          <td> <a href="#.php?ID=<?php echo $row["ID"]; ?>">Remove</a></td>
        </tr>

        <?php }while($row=mysql_fetch_assoc($recordSet));?>
      
    </table>

      </div>


      
    </div>
  <!-- </div> -->
</div>

<?php
include 'MiddleDiv.php';
?>

    <!-- Start footer -->
        <?php
        include 'footer.php';
        ?>
   <!--  End footer -->
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>