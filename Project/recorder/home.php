<?php
session_start();
if($_SESSION['uname']==null)
header("Location:loginPage.php"); 
 ?>
<!DOCTYPE html>
<html>
<?php include'regiheader.php'; ?>
<body>
	<!--form for search-->
	<fieldset id="fieldset1">
		<legend>Search for registered patient</legend>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<input class="ins" type="search" name="find" required="required" placeholder="enter the patient's id or name" spellcheck="false">
			<input class="abtn" type="submit" value="Search">
			<input class="abtn" type="reset" value="Clear">
		</form>
	</fieldset>
	
	<div id="div2">
		<!--table to display  patient records--> 
		<?php include'tableDisp.php';?>
	</div>
	<!--footer php file-->
	<?php include'footer.php' ?>
</body>
</html>
