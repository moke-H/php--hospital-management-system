<?php
session_start();
if($_SESSION['uname']==null)
header("Location:http://localhost/project/recorder/loginPage.php"); 
 ?>
<?php 
unset($_SESSION['blood']);
unset($_SESSION['ultrasoud']);
unset( $_SESSION['urinalysis']); 
unset($_SESSION['id']);
unset($_SESSION['result']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="margin:0px;">
	<!--including the header-->
	<?php include'docheader.php'; ?>
	
	<fieldset id="fieldset1">
		<legend>Search patient appointments</legend>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<input class="ins" type="search" name="find" required="required" placeholder="enter the patient's id or name" spellcheck="false">
			<input class="abtn" type="submit" value="Search">
			<input class="abtn" type="reset" value="Clear">
		</form>
	</fieldset>
	<!--including the table that displays appointments-->
	<?php include'tabledisp.php'; ?>
	<!--footer php file-->
    <?php include'footer.php' ?>
</body>
</html>