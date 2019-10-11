<?php
session_start();
if($_SESSION['uname']==null)
header("Location:loginPage.php"); 
 ?>
<!DOCTYPE html>
<html>
<?php include'regiheader.php'; ?>
<body>
    <!--add appointment form-->
    <div class="div1">
		<fieldset style="width: 100%" class="fieldset">
			<legend>Add Appointment</legend>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				Patient Id:<br>
				<input class="in" type="text" name="pid" autofocus="autofocus" placeholder="enter Patient's Id" spellcheck="false"><br>
                Apointment Date:<br>
                <input class="in" type="datetime-local" name="adate"><br>
                Apointment Room:<br>
                <input class="in" type="text" name="aroom" placeholder="enter The apointment room" >
                <p id="ss" class="pss" ></p><br>
                <input class="btn rc" type="submit" value="Add"><input class="btn" type="reset" value="Clear">
            </form>
        </fieldset>
    </div>
    <!--adding the data into the database-->
    <?php include'addApoi.php';?>
    <!--footer php file-->
    <?php include'footer.php' ?>
</body>
</html>