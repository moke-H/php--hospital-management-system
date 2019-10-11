<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){
		$conn= new mysqli("localhost","root","","me");
		if ($conn->connect_error) {
			die("Connection failed".$conn->connect_error);
		}
		
		$id=$_GET['delete'];
		
		$sql="DELETE FROM patients where id='".$id."'";
		if ($conn->query($sql)) {
			header("Location:home.php");
		}
		else{
			echo "deletion error".$conn->error;
		}
		$conn->close();
	}
	else{
		echo "non no";
	}
?>