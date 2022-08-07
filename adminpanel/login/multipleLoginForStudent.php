 <?php
session_start();
 
  if (!isset($_SESSION['mySession'])) {
      header("location:slogin.php");
  }
?>
<?php
          
          include '../ConPage.php';
          $userimage=$_SESSION['mySession'];

           $res=
           mysql_query("SELECT * FROM `student` WHERE image='$userimage' ",$con);
           $row=mysql_fetch_assoc($res);
           $sid=$row["st_id"];


       ?>
 <?php

                        
                        $img=$_SESSION["mySession"];
                        
                        if(isset($_POST["classname"])){

                            $clname=$_POST["classname"];
                            

                             if ($clname=='Step-1') {

                                 $_SESSION['stepOnelogin'] = $sid;
                                 //$_SESSION['stepOneloginpass']= $pass;
                                 header("location:../../Swebpanel/Step_Classes/step-1.php");
                             }
                             elseif ($clname=='Step-2') {

                                $_SESSION['stepTwologin'] = $sid;
                                 header("location:../../Swebpanel/Step_Classes/step-2.php");
                             }
                             elseif ($clname=='Step-3') {

                                $_SESSION['StepThreelogin'] = $sid;
                                 header("location:../../Swebpanel/Step_Classes/step-3.php");
                             }
                             elseif ($clname=='Base-1') {

                                $_SESSION['baseOnelogin'] = $sid;
                                 header("location:../../Swebpanel/Base_Classes/base-1.php");
                             }
                             elseif ($clname=='Base-2') {

                                $_SESSION['baseTwologin'] = $sid;
                                 header("location:../../Swebpanel/Base_Classes/base-2.php");
                             }
                             elseif ($clname=='Junior-1') {

                                $_SESSION['juniorOnelogin'] = $sid;
                                 header("location:../../Swebpanel/Base_Classes/junior-1.php");
                             }
                             elseif ($clname=='Junior-2') {

                                $_SESSION['juniorTwologin'] = $sid;
                                 header("location:../../Swebpanel/Base_Classes/junior-2.php");
                             }
                             elseif ($clname=='Advanced-1') {

                                $_SESSION['advancedOnelogin'] = $sid;
                                 header("location:../../Swebpanel/Advanced_Classes/Advanced-1.php");
                             }
                             elseif ($clname=='Advanced-2') {

                                $_SESSION['advancedTwologin'] = $sid;
                                 header("location:../../Swebpanel/Advanced_Classes/Advanced-2.php");
                             }
                             elseif ($clname=='Senior-1') {

                                $_SESSION['seniorOnelogin'] = $sid;
                                 header("location:../../Swebpanel/Advanced_Classes/senior-1.php");
                             }
                             elseif ($clname=='Senior-2') {

                                $_SESSION['seniorTwologin'] = $sid;
                                 header("location:../../Swebpanel/Advanced_Classes/senior-2.php");
                             }
                              elseif ($clname=='Conversation') {

                                $_SESSION['conversationlogin'] = $sid;
                                 header("location:../../Swebpanel/Advanced_Classes/conversation.php");
                             }
                             elseif ($clname=='Graduation') {

                                $_SESSION['graduationlogin'] = $sid;
                                 header("location:../../Swebpanel/Advanced_Classes/graduation.php");
                             }
                             elseif ($clname=='internet_collection') {

                                $_SESSION['internetCollectionlogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/internet_collection.php");
                             }
                             elseif ($clname=='MS.excel') {

                                $_SESSION['ms_excellogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/MS.excel.php");
                             }
                             elseif ($clname=='MS.powerpoint') {

                                $_SESSION['ms_powerpointlogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/MS.powerpoint.php");
                             }
                             elseif ($clname=='MS.word') {

                                $_SESSION['ms_wordlogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/MS.word.php");
                             }
                             elseif ($clname=='typing_pashto_dari') {

                                $_SESSION['typingPashtoDarilogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/typing_pashto_dari.php");
                             }
                             elseif ($clname=='window_eight') {

                                $_SESSION['windows_eightlogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/window_eight.php");
                             }
                             elseif ($clname=='window_seven') {

                                $_SESSION['window_sevenlogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/window_seven.php");
                             }
                             elseif ($clname=='window_ten') {

                                $_SESSION['window_tenlogin'] = $sid;
                                 header("location:../../Swebpanel/CIT_Package/window_ten.php");
                             }
                             elseif ($clname=='android_studio') {

                                $_SESSION['undroidlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/android_studio.php");
                             }
                              elseif ($clname=='apk_studio_pro2018') {

                                $_SESSION['apk_studio_pro2018login'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/apk_studio_pro2018.php");
                             }
                              elseif ($clname=='autocad2017') {

                                $_SESSION['autocadlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/autocad2017.php");
                             }
                              elseif ($clname=='c++') {

                                $_SESSION['c++login'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/c++.php");
                             }
                              elseif ($clname=='c') {

                                $_SESSION['clogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/c.php");
                             }
                              elseif ($clname=='camera_editing') {

                                $_SESSION['cameraEditinglogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/camera_editing.php");
                             }
                              elseif ($clname=='cmd') {

                                $_SESSION['cmdlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/cmd.php");
                             }
                             elseif ($clname=='csharp') {

                                $_SESSION['csharplogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/csharp.php");
                             }
                             elseif ($clname=='css5') {

                                $_SESSION['csslogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/css5.php");
                             }
                             elseif ($clname=='dreamweaver_cc2018') {

                                $_SESSION['dreamweaverlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/dreamweaver_cc2018.php");
                             }
                             elseif ($clname=='fi_studio2018') {

                                $_SESSION['fi_studiologin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/fi_studio2018.php");
                             }
                             elseif ($clname=='html_pad2018') {

                                $_SESSION['htmlPadlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/html_pad2018.php");
                             }
                             elseif ($clname=='ibm_spss2014') {

                                $_SESSION['ibmSpsslogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/ibm_spss2014.php");
                             }
                             elseif ($clname=='java') {

                                $_SESSION['javalogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/java.php");
                             }
                             elseif ($clname=='javascript') {

                                $_SESSION['javascriptlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/javascript.php");
                             }
                             elseif ($clname=='jquery') {

                                $_SESSION['jquerylogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/jquery.php");
                             }
                             elseif ($clname=='linux') {

                                $_SESSION['linuxlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/linux.php");
                             }
                             elseif ($clname=='php') {

                                $_SESSION['phplogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/php.php");
                             }
                             elseif ($clname=='sketch_up') {

                                $_SESSION['sketchlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/sketch_up.php");
                             }
                             elseif ($clname=='SolidWorks2018') {

                                $_SESSION['solidWorklogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/SolidWorks2018.php");
                             }
                             elseif ($clname=='sql_server2018') {

                                $_SESSION['sqlServerlogin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/sql_server2018.php");
                             }
                             elseif ($clname=='vb_studio') {

                                $_SESSION['vbStudiologin'] = $sid;
                                 header("location:../../Swebpanel/BigApp_Package/vb_studio.php");
                             }
                              elseif ($clname=='3ds_max') {

                                $_SESSION['3dsmaxlogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/3ds_max.php");
                             }
                             elseif ($clname=='adobe_after_effect_cc') {

                                $_SESSION['adobeAfterEffectlogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_after_effect_cc.php");
                             }
                             elseif ($clname=='adobe_audition_cc2018') {

                                $_SESSION['adobeAuditionCclogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_audition_cc2018.php");
                             }
                             elseif ($clname=='adobe_flash_cc2016') {

                                $_SESSION['adobeFlashCclogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_flash_cc2016.php");
                             }
                             elseif ($clname=='adobe_illustrator_cc') {

                                $_SESSION['adobeIllustratorlogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_illustrator_cc.php");
                             }
                             elseif ($clname=='adobe_muse_cc2018') {

                                $_SESSION['adobeMuseCclogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_muse_cc2018.php");
                             }
                             elseif ($clname=='adobe_photoshop_cc') {

                                $_SESSION['adobePhotoshoplogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_photoshop_cc.php");
                             }
                             elseif ($clname=='adobe_premiere_cc') {

                                $_SESSION['adobePremierelogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/adobe_premiere_cc.php");
                             }
                             elseif ($clname=='audio_video_editing') {

                                $_SESSION['audioVideoEditinglogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/audio_video_editing.php");
                             }
                             elseif ($clname=='aurara_3d_animation_maker') {

                                $_SESSION['auraraAnimationlogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/aurara_3d_animation_maker.php");
                             }
                             elseif ($clname=='auto_play_media_studio8') {

                                $_SESSION['autoMediaStudiologin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/auto_play_media_studio8.php");
                             }
                             elseif ($clname=='cool_edit') {

                                $_SESSION['coolEditlogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/cool_edit.php");
                             }
                             elseif ($clname=='coral_draw_x7') {

                                $_SESSION['coralDrawX7login'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/coral_draw_x7.php");
                             }
                             elseif ($clname=='coral_vido_studio_pro_x7') {

                                $_SESSION['coralVideoStudioProX7login'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/coral_vido_studio_pro_x7.php");
                             }
                             elseif ($clname=='inkscape') {

                                $_SESSION['inkscapelogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/inkscape.php");
                             }
                             elseif ($clname=='muvizo') {

                                $_SESSION['muvizologin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/muvizo.php");
                             }
                             elseif ($clname=='plotagone2016') {

                                $_SESSION['plotagonlogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/plotagone2016.php");
                             }
                             elseif ($clname=='quick_book') {

                                $_SESSION['quickBooklogin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/quick_book.php");
                             }
                             elseif ($clname=='real_draw_pro2018') {

                                $_SESSION['realDrawPrologin'] = $sid;
                                 header("location:../../Swebpanel/Graphics_Package/real_draw_pro2018.php");
                             }
                             elseif ($clname=='AdobePhotoshopCC') {

                                $_SESSION['adobePhotoshoplogin'] = $sid;
                                 header("location:../../Swebpanel/DIT_Package/AdobePhotoshopCC.php");
                             }
                              elseif ($clname=='MSaccess') {

                                $_SESSION['msAccesslogin'] = $sid;
                                 header("location:../../Swebpanel/DIT_Package/MSaccess.php");
                             }
                              elseif ($clname=='AdvancedNetworking') {

                                $_SESSION['advancedNetworkinglogin'] = $sid;
                                 header("location:../../Swebpanel/DIT_Package/AdvancedNetworking.php");
                             }
                              elseif ($clname=='ComputerHardware') {

                                $_SESSION['computerHardwarelogin'] = $sid;
                                 header("location:../../Swebpanel/DIT_Package/ComputerHardware.php");
                             }
                              elseif ($clname=='CoralDrawX7') {

                                $_SESSION['coralDrawX7login'] = $sid;
                                 header("location:../../Swebpanel/DIT_Package/CoralDrawX7.php");
                             }
                              elseif ($clname=='uleadVideoStudio') {

                                $_SESSION['uleadVideoStudiologin'] = $sid;
                                 header("location:../../Swebpanel/DIT_Package/uleadVideoStudio.php");
                             }
                             elseif ($clname=='internet_collection_qit') {

                                $_SESSION['internetCollectionQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/internet_collection.php");
                             }
                             elseif ($clname=='MS.excel_qit') {

                                $_SESSION['msExcelQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/MS.excel.php");
                             }
                             elseif ($clname=='MS.powerpoint_qit') {

                                $_SESSION['msPowerpointQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/MS.powerpoint.php");
                             }
                             elseif ($clname=='MS.word_qit') {

                                $_SESSION['msWordQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/MS.word.php");
                             }
                             elseif ($clname=='typing_pashto_dari_qit') {

                                $_SESSION['typingPashtoDariQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/typing_pashto_dari.php");
                             }
                             elseif ($clname=='window_eight_qit') {

                                $_SESSION['windowEightQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/window_eight.php");
                             }
                             elseif ($clname=='window_seven_qit') {

                                $_SESSION['windowSevenQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/window_seven.php");
                             }
                             elseif ($clname=='window_ten_qit') {

                                $_SESSION['windowTenQitlogin'] = $sid;
                                 header("location:../../Swebpanel/QIT_Package/window_ten.php");
                             }
                             else{
                                echo "<h3 style='color:red'>Opps!!!</h3>";
                             }
                        
                     }
                      ?>




<!DOCTYPE html>

 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Multiple_Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../../public/cssl/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../public/cssl/style.css" />
        <link rel="stylesheet" type="text/css" href="../../public/cssl/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <section>				
                <div id="container_demo" id="teacher" style="">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">

                          <?php
                          $resu=
                           mysql_query("SELECT clname FROM `attend` WHERE stid=$sid ",$con);
                           $rows=mysql_fetch_assoc($resu);
                          ?>
                          <center><img style="width:100px; height:100px; border-radius:50px;" src="../../public/images/services/<?php echo $img?> "></center> 
                            <form  method="POST" action="" enctype="multipart/form-data"> 
                                <h1>Choose login class</h1> 
                                <div class="form-group">
                                            <label> Login to: </label>
                                            <select style="width:150px; height:25px;" class="form-control" name="classname">
                                               <?php do{ ?>
                                  <option><?php echo $rows["clname"]; ?></option>
                        <?php }while($rows=mysql_fetch_assoc($resu));?>
                                            </select>   
                                        </div>
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Login" /> 
                                </p>
                            </form>
                            </div>
                    </div>
                </div> 
            </section>
        </div>
    </body>
</html>