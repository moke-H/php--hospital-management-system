<?php
session_start();
$_SESSION['uname']=null;
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>home page</title>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>

<body id="body">
<h1 class="h1">Wukro General Hospital</h1>
	<hr class="hr">
	<div style="margin: 0px;padding: 0px;">
		<!--navigation bar -->
	    <ul id="ul">
			<li class="li" style="padding:8px;color:white;">Welcome to our hospital!</li>
			<li class="li" style="float: right;margin-right: 1%;"><a href="logout.php">About us</a></li>
		</ul>
	        <!--this is the login form-->
    	<div class="div1" style="margin-top:50px;">
	    	<fieldset class="fieldset">
	    		<legend>Login</legend>
	    		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	    			Username:<br><input style="width: 60%;" id="user" class="in" type="text" name="us" autofocus="autofocus" required="required" placeholder="enter username" spellcheck="false"><span id="p1" id="p" style="color: red;font-family: 'Comic Sans MS';margin-bottom: 20px;font-size: 1.5vw;margin-left: 5px;"></span><br>
	    			Password:<br><input style="margin-bottom: 15px;width: 60%;" class="p in" id="ps" type="Password" name="pass" required="required" placeholder="enter pasword" spellcheck="false"><input type="checkbox" onclick="myFunction()">Show Password
	    			<span class="p" id="cp" ></span><br>
	    			<input class="btn rc" type="submit" value="Login">
	    			<input class="btn" type="reset" value="Cancel">
	    		</form>
	    	</fieldset>
    </div>
    
    <!--php password validation-->
    <?php include'loginVal.php'; ?>
	
	<!--js swhow me password-->
	<script>
	function myFunction() {
	  var x = document.getElementById("ps");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}
	</script>
	<!--footer php file-->
<?php include'footer.php' ?>
</body>
</html>