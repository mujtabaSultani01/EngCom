 <?php
session_start();
 
  if (!isset($_SESSION['mySession'])) {
      header("location:tlogin.php");
  }
?>
 <?php

                        include '../ConPage.php';
                        $img=$_SESSION["mySession"];
                        
                        if(isset($_POST["classname"])){

                            $clname=$_POST["classname"];
                            

                            if ($clname=='Step-1') {

                                 $_SESSION['stepOneloginAsTeacher'] = $img;
                                 //$_SESSION['stepOneloginpass']= $pass;
                                 header("location:../../Sadminpanel/Step_Classes/step-1.php");
                             }
                             elseif ($clname=='Step-2') {

                                $_SESSION['stepTwologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Step_Classes/step-2.php");
                             }
                             elseif ($clname=='Step-3') {

                                $_SESSION['StepThreeloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Step_Classes/step-3.php");
                             }
                             elseif ($clname=='Base-1') {

                                $_SESSION['baseOneloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Base_Classes/base-1.php");
                             }
                             elseif ($clname=='Base-2') {

                                $_SESSION['baseTwologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Base_Classes/base-2.php");
                             }
                             elseif ($clname=='Junior-1') {

                                $_SESSION['juniorOneloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Base_Classes/junior-1.php");
                             }
                             elseif ($clname=='Junior-2') {

                                $_SESSION['juniorTwologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Base_Classes/junior-2.php");
                             }
                             elseif ($clname=='Advanced-1') {

                                $_SESSION['advancedOneloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Advanced_Classes/Advanced-1.php");
                             }
                             elseif ($clname=='Advanced-2') {

                                $_SESSION['advancedTwologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Advanced_Classes/Advanced-2.php");
                             }
                             elseif ($clname=='Conversation') {

                                $_SESSION['conversationloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Advanced_Classes/Conversation.php");
                             }
                             elseif ($clname=='Graduation') {

                                $_SESSION['graduationloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Advanced_Classes/Graduation.php");
                             }
                             elseif ($clname=='Senior-1') {

                                $_SESSION['seniorOneloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Advanced_Classes/Senior-1.php");
                             }
                             elseif ($clname=='Senior-2') {

                                $_SESSION['seniorTwologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Advanced_Classes/Senior-2.php");
                             }
                             elseif ($clname=='internet_collection') {

                                $_SESSION['internetCollectionloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/internet_collection.php");
                             }
                              elseif ($clname=='MS.excel') {

                                $_SESSION['msExcelloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/MS.excel.php");
                             }
                              elseif ($clname=='MS.powerpoint') {

                                $_SESSION['msPowerpointloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/MS.powerpoint.php");
                             }
                              elseif ($clname=='MS.word') {

                                $_SESSION['msWordloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/MS.word.php");
                             }
                              elseif ($clname=='typing_pashto_dari') {

                                $_SESSION['typingPashtoDariloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/typing_pashto_dari.php");
                             }
                              elseif ($clname=='window_eight') {

                                $_SESSION['windowEightloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/window_eight.php");
                             }
                              elseif ($clname=='window_seven') {

                                $_SESSION['windowSevenloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/window_seven.php");
                             }
                              elseif ($clname=='window_ten') {

                                $_SESSION['windowTenloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/CIT_Package/window_ten.php");
                             }
                              elseif ($clname=='AdobePhotoshopCC') {

                                $_SESSION['adobePhotoShopCCloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/DIT_Package/AdobePhotoshopCC.php");
                             }
                              elseif ($clname=='AdvancedNetworking') {

                                $_SESSION['advancedNetworkingloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/DIT_Package/AdvancedNetworking.php");
                             }
                              elseif ($clname=='ComputerHardware') {

                                $_SESSION['computerHardwareloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/DIT_Package/ComputerHardware.php");
                             }
                              elseif ($clname=='CoralDrawX7') {

                                $_SESSION['coralDrawX7loginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/DIT_Package/CoralDrawX7.php");
                             }
                              elseif ($clname=='MSaccess') {

                                $_SESSION['msAccessloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/DIT_Package/MSaccess.php");
                             }
                              elseif ($clname=='UleadVideoStudio') {

                                $_SESSION['uleadVideoStudiologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/DIT_Package/UleadVideoStudio.php");
                             }
                              elseif ($clname=='internet_collection_qit') {

                                $_SESSION['internetCollectionQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/internet_collection_qit.php");
                             }
                              elseif ($clname=='MS.excel_qit') {

                                $_SESSION['msExcelQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/MS.excel_qit.php");
                             }
                              elseif ($clname=='MS.powerpoint_qit') {

                                $_SESSION['msPowerpointQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/MS.powerpoint_qit.php");
                             }
                              elseif ($clname=='MS.word_qit') {

                                $_SESSION['msWordQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/MS.word_qit.php");
                             }
                              elseif ($clname=='typing_pashto_dari_qit') {

                                $_SESSION['typingPashtoDariQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/typing_pashto_dari_qit.php");
                             }
                              elseif ($clname=='window_eight_qit') {

                                $_SESSION['windowEightQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/window_eight_qit.php");
                             }
                              elseif ($clname=='window_seven_qit') {

                                $_SESSION['windowSevenQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/window_seven_qit.php");
                             }
                              elseif ($clname=='window_ten_qit') {

                                $_SESSION['windowTenQitloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/QIT_Package/window_ten_qit.php");
                             }
                             elseif ($clname=='3ds_max') {

                                $_SESSION['3dsmaxloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/3ds_max.php");
                             }
                             elseif ($clname=='adobe_after_effect_cc') {

                                $_SESSION['adobeAfterEffectloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_after_effect_cc.php");
                             }
                             elseif ($clname=='adobe_audition_cc2018') {

                                $_SESSION['adobeAuditionCcloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_audition_cc2018.php");
                             }
                             elseif ($clname=='adobe_flash_cc2016') {

                                $_SESSION['adobeFlashCcloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_flash_cc2016.php");
                             }
                             elseif ($clname=='adobe_illustrator_cc') {

                                $_SESSION['adobeIllustratorloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_illustrator_cc.php");
                             }
                             elseif ($clname=='adobe_muse_cc2018') {

                                $_SESSION['adobeMuseCcloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_muse_cc2018.php");
                             }
                             elseif ($clname=='adobe_photoshop_cc') {

                                $_SESSION['adobePhotoshoploginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_photoshop_cc.php");
                             }
                             elseif ($clname=='adobe_premiere_cc') {

                                $_SESSION['adobePremiereloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/adobe_premiere_cc.php");
                             }
                             elseif ($clname=='audio_video_editing') {

                                $_SESSION['audioVideoEditingloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/audio_video_editing.php");
                             }
                             elseif ($clname=='aurara_3d_animation_maker') {

                                $_SESSION['auraraAnimationloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/aurara_3d_animation_maker.php");
                             }
                             elseif ($clname=='auto_play_media_studio8') {

                                $_SESSION['autoMediaStudiologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/auto_play_media_studio8.php");
                             }
                             elseif ($clname=='cool_edit') {

                                $_SESSION['coolEditloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/cool_edit.php");
                             }
                             elseif ($clname=='coral_draw_x7') {

                                $_SESSION['coralDrawX7loginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/coral_draw_x7.php");
                             }
                             elseif ($clname=='coral_vido_studio_pro_x7') {

                                $_SESSION['coralVideoStudioProX7loginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/coral_vido_studio_pro_x7.php");
                             }
                             elseif ($clname=='inkscape') {

                                $_SESSION['inkscapeloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/inkscape.php");
                             }
                             elseif ($clname=='muvizo') {

                                $_SESSION['muvizologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/muvizo.php");
                             }
                             elseif ($clname=='plotagone2016') {

                                $_SESSION['plotagonloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/plotagone2016.php");
                             }
                             elseif ($clname=='quick_book') {

                                $_SESSION['quickBookloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/quick_book.php");
                             }
                             elseif ($clname=='real_draw_pro2018') {

                                $_SESSION['realDrawProloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/Graphics_Package/real_draw_pro2018.php");
                             }
                             elseif ($clname=='android_studio') {

                                $_SESSION['undroidloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/android_studio.php");
                             }
                              elseif ($clname=='apk_studio_pro2018') {

                                $_SESSION['apk_studio_pro2018loginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/apk_studio_pro2018.php");
                             }
                              elseif ($clname=='autocad2017') {

                                $_SESSION['autocadloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/autocad2017.php");
                             }
                              elseif ($clname=='c++') {

                                $_SESSION['c++loginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/c++.php");
                             }
                              elseif ($clname=='c') {

                                $_SESSION['cloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/c.php");
                             }
                              elseif ($clname=='camera_editing') {

                                $_SESSION['cameraEditingloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/camera_editing.php");
                             }
                              elseif ($clname=='cmd') {

                                $_SESSION['cmdloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/cmd.php");
                             }
                             elseif ($clname=='csharp') {

                                $_SESSION['csharploginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/csharp.php");
                             }
                             elseif ($clname=='css5') {

                                $_SESSION['cssloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/css5.php");
                             }
                             elseif ($clname=='dreamweaver_cc2018') {

                                $_SESSION['dreamweaverloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/dreamweaver_cc2018.php");
                             }
                             elseif ($clname=='fi_studio2018') {

                                $_SESSION['fi_studiologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/fi_studio2018.php");
                             }
                             elseif ($clname=='html_pad2018') {

                                $_SESSION['htmlPadloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/html_pad2018.php");
                             }
                             elseif ($clname=='ibm_spss2014') {

                                $_SESSION['ibmSpssloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/ibm_spss2014.php");
                             }
                             elseif ($clname=='java') {

                                $_SESSION['javaloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/java.php");
                             }
                             elseif ($clname=='javascript') {

                                $_SESSION['javascriptloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/javascript.php");
                             }
                             elseif ($clname=='jquery') {

                                $_SESSION['jqueryloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/jquery.php");
                             }
                             elseif ($clname=='linux') {

                                $_SESSION['linuxloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/linux.php");
                             }
                             elseif ($clname=='php') {

                                $_SESSION['phploginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/php.php");
                             }
                             elseif ($clname=='sketch_up') {

                                $_SESSION['sketchloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/sketch_up.php");
                             }
                             elseif ($clname=='SolidWorks2018') {

                                $_SESSION['solidWorkloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/SolidWorks2018.php");
                             }
                             elseif ($clname=='sql_server2018') {

                                $_SESSION['sqlServerloginAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/sql_server2018.php");
                             }
                             elseif ($clname=='vb_studio') {

                                $_SESSION['vbStudiologinAsTeacher'] = $img;
                                 header("location:../../Sadminpanel/BigApp_Package/vb_studio.php");
                             }
                             else{
                                echo "<h3 style='color:red'>Opps!!!: Problem in class selection...</h3>";
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

      <?php
          $userimage=$_SESSION['mySession'];

           $res=
           mysql_query("SELECT * FROM `teacher` WHERE image='$userimage' ",$con);
           $row=mysql_fetch_assoc($res);
           $tid=$row["tid"];


       ?>
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
                           mysql_query("SELECT clname FROM `teacher_attend` WHERE t_id=$tid ",$con);
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