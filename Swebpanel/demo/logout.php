<?php
    session_start();

    if (isset($_SESSION["stepOnelogin"])) {
    	
    	unset($_SESSION["stepOnelogin"]);
    	header("location:index.php");
    }
    elseif ($_SESSION["stepTwologin"]) {
    	
    	unset($_SESSION["stepTwologin"]);
    	header("location:index.php");
    }
    elseif ($_SESSION["StepThreelogin"]) {
    	
    	unset($_SESSION["StepThreelogin"]);
    	header("location:index.php");
    }
    elseif ($_SESSION["baseOnelogin"]) {
        
        unset($_SESSION["baseOnelogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["baseTwologin"]) {
        
        unset($_SESSION["baseTwologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["juniorOnelogin"]) {
        
        unset($_SESSION["juniorOnelogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["juniorTwologin"]) {
        
        unset($_SESSION["juniorTwologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["advancedOnelogin"]) {
        
        unset($_SESSION["advancedOnelogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["advancedTwologin"]) {
        
        unset($_SESSION["advancedTwologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["seniorOnelogin"]) {
        
        unset($_SESSION["seniorOnelogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["seniorTwologin"]) {
        
        unset($_SESSION["seniorTwologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["conversationlogin"]) {
        
        unset($_SESSION["conversationlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["graduationlogin"]) {
        
        unset($_SESSION["graduationlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["internetCollectionlogin"]) {
        
        unset($_SESSION["internetCollectionlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["ms_excellogin"]) {
        
        unset($_SESSION["ms_excellogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["ms_powerpointlogin"]) {
        
        unset($_SESSION["ms_powerpointlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["ms_wordlogin"]) {
        
        unset($_SESSION["ms_wordlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["typingPashtoDarilogin"]) {
        
        unset($_SESSION["typingPashtoDarilogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["windows_eightlogin"]) {
        
        unset($_SESSION["windows_eightlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["window_sevenlogin"]) {
        
        unset($_SESSION["window_sevenlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["window_tenlogin"]) {
        
        unset($_SESSION["window_tenlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["undroidlogin"]) {
        
        unset($_SESSION["undroidlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["apk_studio_pro2018login"]) {
        
        unset($_SESSION["apk_studio_pro2018login"]);
        header("location:index.php");
    }
    elseif ($_SESSION["autocadlogin"]) {
        
        unset($_SESSION["autocadlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["c++login"]) {
        
        unset($_SESSION["c++login"]);
        header("location:index.php");
    }
    elseif ($_SESSION["clogin"]) {
        
        unset($_SESSION["clogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["cameraEditinglogin"]) {
        
        unset($_SESSION["cameraEditinglogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["cmdlogin"]) {
        
        unset($_SESSION["cmdlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["csharplogin"]) {
        
        unset($_SESSION["csharplogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["csslogin"]) {
        
        unset($_SESSION["csslogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["dreamweaverlogin"]) {
        
        unset($_SESSION["dreamweaverlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["fi_studiologin"]) {
        
        unset($_SESSION["fi_studiologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["htmlPadlogin"]) {
        
        unset($_SESSION["htmlPadlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["ibmSpsslogin"]) {
        
        unset($_SESSION["ibmSpsslogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["javalogin"]) {
        
        unset($_SESSION["javalogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["javascriptlogin"]) {
        
        unset($_SESSION["javascriptlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["jquerylogin"]) {
        
        unset($_SESSION["jquerylogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["linuxlogin"]) {
        
        unset($_SESSION["linuxlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["phplogin"]) {
        
        unset($_SESSION["phplogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["sketchlogin"]) {
        
        unset($_SESSION["sketchlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["solidWorklogin"]) {
        
        unset($_SESSION["solidWorklogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["sqlServerlogin"]) {
        
        unset($_SESSION["sqlServerlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["vbStudiologin"]) {
        
        unset($_SESSION["vbStudiologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["3dsmaxlogin"]) {
        
        unset($_SESSION["3dsmaxlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobeAfterEffectlogin"]) {
        
        unset($_SESSION["adobeAfterEffectlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobeAuditionCclogin"]) {
        
        unset($_SESSION["adobeAuditionCclogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobeFlashCclogin"]) {
        
        unset($_SESSION["adobeFlashCclogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobeIllustratorlogin"]) {
        
        unset($_SESSION["adobeIllustratorlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobeMuseCclogin"]) {
        
        unset($_SESSION["adobeMuseCclogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobePhotoshoplogin"]) {
        
        unset($_SESSION["adobePhotoshoplogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobePremierelogin"]) {
        
        unset($_SESSION["adobePremierelogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["audioVideoEditinglogin"]) {
        
        unset($_SESSION["audioVideoEditinglogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["auraraAnimationlogin"]) {
        
        unset($_SESSION["auraraAnimationlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["autoMediaStudiologin"]) {
        
        unset($_SESSION["autoMediaStudiologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["coolEditlogin"]) {
        
        unset($_SESSION["coolEditlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["coralDrawX7login"]) {
        
        unset($_SESSION["coralDrawX7login"]);
        header("location:index.php");
    }
    elseif ($_SESSION["coralVideoStudioProX7login"]) {
        
        unset($_SESSION["coralVideoStudioProX7login"]);
        header("location:index.php");
    }
    elseif ($_SESSION["inkscapelogin"]) {
        
        unset($_SESSION["inkscapelogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["muvizologin"]) {
        
        unset($_SESSION["muvizologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["plotagonlogin"]) {
        
        unset($_SESSION["plotagonlogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["quickBooklogin"]) {
        
        unset($_SESSION["quickBooklogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["realDrawPrologin"]) {
        
        unset($_SESSION["realDrawPrologin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["adobePhotoshoplogin"]) {
        
        unset($_SESSION["adobePhotoshoplogin"]);
        header("location:index.php");
    }
    elseif ($_SESSION["msAccesslogin"]) {
        
        unset($_SESSION["msAccesslogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["advancedNetworkinglogin"]) {
        
        unset($_SESSION["advancedNetworkinglogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["computerHardwarelogin"]) {
        
        unset($_SESSION["computerHardwarelogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["coralDrawX7login"]) {
        
        unset($_SESSION["coralDrawX7login"]);
        header("location:index.php");
    }
     elseif ($_SESSION["uleadVideoStudiologin"]) {
        
        unset($_SESSION["uleadVideoStudiologin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["internetCollectionQitlogin"]) {
        
        unset($_SESSION["internetCollectionQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["msExcelQitlogin"]) {
        
        unset($_SESSION["msExcelQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["msPowerpointQitlogin"]) {
        
        unset($_SESSION["msPowerpointQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["msWordQitlogin"]) {
        
        unset($_SESSION["msWordQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["typingPashtoDariQitlogin"]) {
        
        unset($_SESSION["typingPashtoDariQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["windowEightQitlogin"]) {
        
        unset($_SESSION["windowEightQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["windowSevenQitlogin"]) {
        
        unset($_SESSION["windowSevenQitlogin"]);
        header("location:index.php");
    }
     elseif ($_SESSION["window_ten_qit"]) {
        
        unset($_SESSION["window_ten_qit"]);
        header("location:index.php");
    }
    else{
        echo "No Such Session...";
    }


?>