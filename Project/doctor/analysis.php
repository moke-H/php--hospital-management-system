<?php
session_start();
if($_SESSION['uname']==null)
header("Location:loginPage.php"); 
 ?>
<?php
    if(empty($_POST['pstatus'])&&empty($_POST['diagnosis']))
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
<body>
    <?php include'docheader.php'; ?>
    <?php require'Dresult.php' ?>
    <div id="div1">
        <fieldset class="fset">
            <legend>Patient status</legend>
            <form id="formf" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <textarea class="inputs" name="pstatus" id="ta" cols="60" rows="10"></textarea><br>
                <input class="cabtn" type="submit" value="submit">
            </form>
        </fieldset>
        <fieldset class="fset" style="margin-top:5px;" >
            <legend>Additional diagnosis</legend>
            <form id="formf" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
                <p>diagnosis type:</p>
                <select class="inputs" name="diagnosis">
                    <option value="Blood">Blood</option>
                    <option value="Ultrasound">Ultrasound</option>
                    <option value="Urinalysis">Urinalysis</option>
                </select><br>
                <input class="cabtn" type="submit" value="submit">
            </form>
        </fieldset>
    </div>
    <div class='div2'>
        <fieldset class='fset'>
        <legend>Diagnosis result</legend>
        <ul class='lul'>
            <li class='lii'><button style='margin-left: 5px;' type='button' onclick="me('<?php echo $_SESSION['blood']; ?>')" class='hku'>Blood</button></li>
            <li class='lii'><button  type='button' onclick="me('<?php echo $_SESSION['ultrasoud']; ?>')" class='hku'>Ultrasound</button></li>
            <li class='lii'><button  type='button' onclick="me('<?php echo $_SESSION['urinalysis'] ;?>')" class='hku'>Urinalysis</button></li>
        </ul>
        <p id='pc'></p>
        <?php echo "<script>document.getElementById('pc').innerHTML='".$_SESSION['blood']."'</script>"; ?>
        </fieldset>
    </div>
    <?php include'pstatus.php' ?>
    <!--footer php file-->
    <?php include'footer.php' ?>
    <script>
        function me(x){
            document.getElementById('pc').innerHTML=x;
        }
    </script>
</body>
</html>