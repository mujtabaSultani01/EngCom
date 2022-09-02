<?php
    session_start();

    if (isset($_SESSION["stepOneloginAsTeacher"])) {
    	
    	unset($_SESSION["stepOneloginAsTeacher"]);
    	header("location:../../Swebpanel/demo/index.php");
    }
    elseif ($_SESSION["stepTwologinAsTeacher"]) {
    	
    	unset($_SESSION["stepTwologinAsTeacher"]);
    	header("location:../../Swebpanel/demo/index.php");
    }
    elseif ($_SESSION["StepThreeloginAsTeacher"]) {
    	
    	unset($_SESSION["StepThreeloginAsTeacher"]);
    	header("location:../../Swebpanel/demo/index.php");
    }
    elseif ($_SESSION["loginAsAdmin"]) {
        unset($_SESSION["loginAsAdmin"]);
        header("location:../../Swebpanel/demo/index.php");
    }
    elseif ($_SESSION["loginAsUser"]) {
        unset($_SESSION["loginAsUser"]);
        header("location:../../Swebpanel/demo/index.php");
    }
?>