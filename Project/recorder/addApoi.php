<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//connection
	$conn= new mysqli("localhost","root","","me");
	if ($conn->connect_error) {
		die("Connection failed".$conn->connect_error);
	}
	//puting the submitted dta into variables
	$id=$_POST['pid'];
	$adate=$_POST['adate'];
	$room=$_POST['aroom'];
	//insertion query
	$sql="INSERT INTO appointments values('$id','$adate','$room')";
	if($conn->query($sql)===true){
        	echo "<script>document.getElementById('ss').innerHTML='Inserted succsessfully!'</script>";
        }
        else{
        	echo "insertion failed".$conn->error;
        }
        $conn->close();
    } 
?>
