<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn= new mysqli("localhost","root","","me");
		if ($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		$id=$_SESSION['uname'];
		$npass=$_POST['npass'];
		$sql="SELECT passwordd from doctors where username='".$id."'";
		if($re=$conn->query($sql)){
		    if($re->num_rows > 0){
               $row = $re->fetch_assoc();
               if($row['passwordd']==$_POST['cpass']){
                   if($_POST['npass']==$_POST['conpass']){
                       $sql="UPDATE doctors set passwordd='".$npass."' where username='".$id."'";
                       if($conn->query($sql)==true){
                            echo "<script>document.getElementById('ss').innerHTML='password changed successfully!';</script>"; 
                        }
                    }
                    else{
                        echo "<script>document.getElementById('cp').innerHTML='wrong Confirmation!';</script>";
                    }   
               }
               else{
                  echo "<script>document.getElementById('cpp').innerHTML='wrong password!';
                  document.getElementById('iid').value='$id'</script>";
               }
		    }
	    }
	    $conn->close();
	}
?>