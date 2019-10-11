<?php
session_start();
if($_SESSION['uname']==null)
header("Location:http://localhost/project/recorder/loginPage.php"); 
 ?>
<?php
    $_SESSION['id']=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body style="margin:0px;">
	<?php include'docheader.php'; ?>
	<?php require'showHistory.php'; ?>
	
	<div class="div3">
	<fieldset class="fset">
		<legend>Patient history</legend>
        <p id='pcc'> <?php echo $_SESSION['result'] ?></p>
	</fieldset>
	</div> 
	
	<div class='div4'>
        <fieldset class='fset'>
        <legend>Diagnosis history</legend>
        <ul class='lul'>
            <li class='lii'><button style='margin-left: 5px;' type='button' onclick="me('<?php echo $_SESSION['blood']; ?>')" class='hku'>Blood</button></li>
            <li class='lii'><button  type='button' onclick="me('<?php echo $_SESSION['ultrasoud']; ?>')" class='hku'>Ultrasound</button></li>
            <li class='lii'><button  type='button' onclick="me('<?php echo $_SESSION['urinalysis'] ;?>')" class='hku'>Urinalysis</button></li>
        </ul>
		<p id='pc'></p>
		<?php echo "<script>document.getElementById('pc').innerHTML='".$_SESSION['blood']."'</script>"; ?>
        </fieldset>
    </div>

	<!--footer php file-->
    <?php include'footer.php' ?> 
	<script>
        function me(x){
            document.getElementById('pc').innerHTML=x;
        }
    </script>
</body>
</html>