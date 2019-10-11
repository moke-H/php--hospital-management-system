<?php
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//connection
		$conn= new mysqli("localhost","root","","me");
		if ($conn->connect_error) {
			die("connection failed".$conn->connect_error);
		}
		//puting the submitted dta into variables
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$gender=$_POST['gender'];
		$bdate=$_POST['bdate'];
		$address=$_POST['address'];
		//insertion query
		$sql="INSERT INTO `patients`( `fname`, `lname`, `gender`, `bdate`, `address`) VALUES ('$firstname','$lastname','$gender','$bdate','$address')";
        if($conn->query($sql)===true){
        	$lastid=$conn->insert_id;
        	echo "<script>document.getElementById('ss').innerHTML='Inserted succsessfully your id is=$lastid';</script>";
        }
        else{
        	echo "Erorr  in insertion $sql".$conn->error;
        }
		$conn->close();
	}
	 ?>	