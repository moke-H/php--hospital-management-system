<?php
if($_SESSION['uname']==null)
header("Location:http://localhost/project/recorder/loginPage.php"); 
?>
<?php
    $conn= new mysqli("localhost","root","","me");
    if ($conn->connect_error) {
        die("connection failed".$conn->connect_error);
    }
    $x=$_SESSION['uname'];
    $sql1="SELECT `user`, `images` FROM `img-upload` WHERE user='$x' ";
    if($re=$conn->query($sql1)){
        if($re->num_rows > 0){
            $row = $re->fetch_assoc();
            $row['images'];
        }
    }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bandj/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/project/recorder/loginstyle.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin:0px;" >
    <div class="lilay">
        <div class="bni">
            <h1 class="h1 font-weight-bold">Wukro General Hospital</h1>
        </div>
        <fieldset id="tesfay">
            <form id="fo" action="upload.php" method="post" enctype="multipart/form-data">
                <img class="rounded-circle" onclick="triggerclick()" src="images/<?php echo $row['images']?>" id="pimage" alt="add"><br>
                <input type="file" onchange="dispimg(this)" name="file" id="imf" required="required">
                <button style="margin-top:-8px;text-aline:center;" class="btn btn-link" type="submit" name="filem">Save</button>
            </form>
        </fieldset>
        <hr class="hr">
    </div>
	<div >
		<!--navigation bar -->
	    <ul id="ul">
			<li class="li"><a href="home.php">Home</a></li>
			<li class="li" style="float: right;margin-right: 1%;"><a href="logout.php">Logout</a></li>
		</ul>
	</div>
    <div class="belay float_left">
        <a class="ino" href="#demo1" data-toggle="collapse">Profile</a>
        <div id="demo1" class="collapse mb">
            <a class="ina"  href="pdetail.php">personal Detail</a>
            <a class="ina" href="#">View profile</a>
            <a class="ina" href="#">Add Admin</a>
        </div><br>
        <a class="ino" href="#demo2" data-toggle="collapse">Doctors</a>
        <div id="demo2" class="collapse mb">
            <a class="ina"  href="#">Doctors List</a>
            <a class="ina"  href="#">Add Doctor</a><br>
            <a class="ina"  href="#">Set Schedule</a>
        </div><br>
        <a class="ino" href="#demo3" data-toggle="collapse">Recorders</a>
        <div id="demo3" class="collapse mb">
            <a class="ina" href="#">List of Recorders</a>
            <a class="ina"  href="#">Add Recorder</a>
            <a class="ina" href="#">Set Schedule</a>
        </div>
    </div> 
    <script src="myjs.js">
    </script>
</body>
</html>