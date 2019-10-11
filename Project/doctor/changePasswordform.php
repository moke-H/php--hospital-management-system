<?php
session_start();
if($_SESSION['uname']==null)
header("Location:http://localhost/project/recorder/loginPage.php"); 
 ?>
<!DOCTYPE html>
<html>
<?php include'docheader.php'; ?>
<body>
	<div class="div1">
		<fieldset style="width: 100%" class="fieldset">
			<legend>change your password</legend>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				Current password:<br>
			    <input class="in" type="text" name="cpass" autofocus="autofocus" placeholder="enter your current password">
				<span class="p" id="cpp" style="color: red;margin-bottom: 20px;font-family: 'Comic Sans MS';font-size: 1.5vw;margin-left: 5px;"></span><br>
	            New password:<br>
	            <input class="in" type="text" name="npass" autofocus="autofocus" placeholder="enter the new password"><br>
				Confirmation:<br>
	            <input style="margin-bottom: 15px;" class="in" type="text" name="conpass" autofocus="autofocus" placeholder="Confirmation">
				<span class="p" id="cp" style="color: red;margin-bottom: 20px;font-family: 'Comic Sans MS';font-size: 1.5vw;margin-left: 5px;"></span><br>
	            <p id="ss" style="color: green;font-family: 'Comic Sans MS';margin: 0px;padding: 0px;"></p><br>
	            <input class="btn rc" type="submit" value="Change"><input class="btn" type="reset" value="Clear">
			</form>
		</fieldset>
	</div>
	<?php include'changePass.php'; ?>
	<!--footer php file-->
    <?php include'footer.php' ?>
</body>
</html>