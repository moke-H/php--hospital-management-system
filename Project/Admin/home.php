<?php
session_start();
if($_SESSION['uname']==null)
header("Location:http://localhost/project/recorder/loginPage.php"); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bandj/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/project/recorder/loginstyle.css">
    <link rel="stylesheet" href="bandj/style.css">
    <script src="bandj/jquery.min.js"></script>
    <script src="bandj/popper.min.js"></script>
    <script src="bandj/bootstrap.min.js"></script>
</head>
<body>
    <?php include'adminHeader.php'; ?>
    <div class="beyene float-right">
        <p class="font-weight-bold" >Overview</p> 
        <fieldset class="col-md-3 fldsett">
            <span class="float-left">23</span><br>
            <img class="float-right imga" src="images/CaptureD.PNG" alt="doc">
            <a class="float-left" href="#">Doctors</a>
        </fieldset> 
        <fieldset class="col-md-3 fldsett">
            <span class="float-left">23</span><br>
            <img class="float-right imga" src="images/Capturer.PNG" alt="doc">
            <a class="float-left" href="#">Recorders</a>
        </fieldset> 
        <fieldset class="col-md-3 fldsett">
            <span class="float-left">23</span><br>
            <img class="float-right imga" src="images/Capturen.PNG" alt="doc">
            <a class="float-left" href="#">Nurses</a>
        </fieldset> 
        <fieldset class="col-md-3 fldsett">
            <span class="float-left">23</span><br>
            <img class="float-right imga" src="images/Capturep.PNG" alt="doc">
            <a class="float-left" href="#">pharmastist</a>
        </fieldset> 
        <fieldset class="col-md-3 fldsett">
            <span class="float-left">23</span><br>
            <img class="float-right imga" src="images/Captureo.PNG" alt="doc">
            <a class="float-left" href="#">Opration</a>
        </fieldset> 
        <fieldset class="col-md-3 fldsett">
            <span class="float-left">23</span><br>
            <img class="float-right imga" style="margin-top: -22px;" src="images/Capturept.PNG" alt="doc">
            <a class="float-left" href="#">Patient</a>
        </fieldset> 
        </div> 
   <?php include'footer.php'?> 
</body>
</html>