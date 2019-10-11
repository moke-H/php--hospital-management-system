<?php
session_start();
if($_SESSION['uname']==null)
header("Location:loginPage.php"); 
 ?>
<!DOCTYPE html>
<html>
<?php include'regiheader.php'; ?>
<body>
<!--form for patient registration-->
    <div class="div1">
        <fieldset style="width: 100%;" class="fieldset">
            <legend>Patient Registration</legend>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    First Name:<br>
                    <input class="in" type="text" name="fname" autofocus="autofocus" placeholder="enter Patient's name" required="required" spellcheck="false"><br>
                    Last Name:<br>
                    <input class="in" type="text" name="lname" autofocus="autofocus" placeholder="enter Patient's last name" required="required" spellcheck="false"><br>
                    Gender:<br>male<input type="radio" name="gender" value="male" checked="checked">
                    female<input type="radio" name="gender" value="female">
                    other<input type="radio" name="gender" value="other"><br>
                    Birth Date:<br><input class="in" type="date" name="bdate" required="required"><br>
                    Address:<br>
                    <input class="in" type="text" name="address" autofocus="autofocus" placeholder="enter patient's address" required="required" spellcheck="false"><br>
                    <p class="pss" id="ss" style="color: green;font-family: 'Comic Sans MS';margin: 0px;padding: 0px;"></p><br>
                    <input class="btn rc" type="submit" value="Add"><input class="btn" type="reset" value="Clear">
                </form>
        </fieldset>
    </div>
        <!--php file to perform the registration in the database-->
        <?php include'addpat.php';?>
        <!--footer php file-->
        <?php include'footer.php' ?>
</body>
</html>