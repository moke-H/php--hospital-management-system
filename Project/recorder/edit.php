<?php
session_start();
if($_SESSION['uname']==null)
header("Location:loginPage.php"); 
 ?>
<!DOCTYPE html>
<html>
<?php include'regiheader.php'; ?>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] != "POST") {
	$conn= new mysqli("localhost","root","","me");
	#check
	if ($conn->connect_error) {
		die("connection failed".$conn->connect_error);
	}
	
	if(isset($_GET['edit'])){
    	$ide=$_GET['edit'];
		$_SESSION['ed']=$_GET['edit'];
		$sql="SELECT *FROM patients where id='".$ide."'";
    	if($re=$conn->query($sql)){
	        if($re->num_rows >0){
	        	$row=$re->fetch_array();
	            $re->free();
	        }
	        else { 
	            echo "No matching records are found."; 
	        }  
	    }
	    else { 
	        echo "ERROR: Could not able to execute $sql. " .$conn->error; 
	    }
	    }
	    $conn->close();
	}
?>
<div class="div1" style="margin-top: 2px;">
    <fieldset style="width: 100%;margin-top: 1px;" class="fieldset">
	<legend>Update Patient Profile</legend>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        	Id:<br> 
        	<input id="m1" class="in ed" type="text" name="id" value="<?php echo $row[0];?>"><br>
        	First Name: <br>
        	<input id="m2" class="in ed" type="text" name="fname" value="<?php echo $row[1];?>" ><br>
            Last Name:<br>
            <input id="m3" class="in ed" type="text" name="lname" value="<?php echo $row[2];?>"><br>
            Gender:<br>
            <input id="m4" class="in ed" type="text" name="gender" value="<?php echo $row[3];?>" ><br>
            Birth Date:<br><input id="m5" class="in ed" type="date" name="bdate" value="<?php echo $row[4];?>"><br>
            Address:<br>
            <input id="m6" class="in ed" type="text" name="address" value="<?php echo $row[5];?>"><br>
            <p id="ss" class="pss" ></p><br>
            <input style="margin-left: 40%;" class="btn rc" type="submit" value="Update">
        </form>
    </fieldset>
</div>
<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn= new mysqli("localhost","root","","me");
		#check
		if ($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		$id=$_POST['id'];
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$gender=$_POST['gender'];
		$bdate=$_POST['bdate'];
		$address=$_POST['address'];
		
		$sql="UPDATE patients set fname='$firstname', lname='$lastname', gender='$gender', bdate='$bdate', address='$address' where id='$id'";
        if($conn->query($sql)===true){
			echo "<script>document.getElementById('m1').value='$id'</script>";
			echo "<script>document.getElementById('m2').value='$firstname'</script>";
			echo "<script>document.getElementById('m3').value='$lastname'</script>";
			echo "<script>document.getElementById('m4').value='$gender'</script>";
			echo "<script>document.getElementById('m5').value='$bdate'</script>";
			echo "<script>document.getElementById('m6').value='$address'</script>";
        	echo "<script>document.getElementById('ss').innerHTML='Updated successfully!'</script>";
        	echo "<script>document.getElementByClassName('btn').style='margin-top:0px;'</script>";
        }
        else{
        	echo "Erorr  in insertion $sql".$conn->error;
        }
		$conn->close();
	}
	 ?>
</body>
</html>