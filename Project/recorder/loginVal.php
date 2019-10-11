<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$us=$_POST['us'];
		$pas=$_POST['pass'];
		$_SESSION['uname']=$us;
		//connection
		$conn= new mysqli("localhost","root","","me");
		if ($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		//password validation for recorders
		$sql="select passwordd from recorders where username='".$us."'";
		if($re=$conn->query($sql)){
			if($re->num_rows>0){
				while($row=$re->fetch_array()){
					if($row['passwordd']===$pas){
						header("Location:home.php");
					}
					else{
						//javascript if password is wrong
						echo "<script>
						document.getElementById('cp').innerHTML='wrong pasword!';
						document.getElementById('user').value='".$us."';
						</script>";
					}
				}
				$re->free();
			}
			else{
				//password validation for doctors
				$sql="select passwordd from doctors where username='".$us."'";
				if($re=$conn->query($sql)){
					if($re->num_rows>0){
						while($row=$re->fetch_array()){
							if($row['passwordd']===$pas){
								header("Location:http://localhost/project/doctor/home.php");
							}
							else{
								//javascript if password is wrong
								echo "<script>
								document.getElementById('cp').innerHTML='wrong pasword!';
								document.getElementById('user').value='".$us."';
								</script>";
							}
						}
						//making free the object
						$re->free();
					}
					else{
						//password validation for doctors
						$sql="select pass from admin where username='".$us."'";
						if($re=$conn->query($sql)){
							if($re->num_rows>0){
								while($row=$re->fetch_array()){
									if($row['pass']===$pas){
										header("Location:http://localhost/project/Admin/home.php");
									}
									else{
										//javascript if password is wrong
										echo "<script>
										document.getElementById('cp').innerHTML='wrong pasword!';
										document.getElementById('user').value='".$us."';
										</script>";
									}
								}
								//making free the object
								$re->free();
							}
							else{
								//javascript if username is wrong
											echo "<script>document.getElementById('p1').innerHTML='wrong username!';</script>";
										}
						}
					}
			}
		    }
		}
		//closing the connection
		$conn->close();
    }
?>