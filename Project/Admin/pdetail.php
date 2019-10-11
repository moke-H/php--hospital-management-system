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
    <link rel="stylesheet" href="bandj/bootstrap.css">
    <link rel="stylesheet" href="bandj/style.css">
    <script src="bandj/jquery.min.js"></script>
    <script src="bandj/popper.min.js"></script>
    <script src="bandj/bootstrap.min.js"></script>
</head>
<body>
    <?php include'adminHeader.php'?>
    <div class="beyene float-right">
    <p class="font-weight-bold">welcom!</p>
    </div>
    <?php include'footer.php'?> 
</body>
</html>