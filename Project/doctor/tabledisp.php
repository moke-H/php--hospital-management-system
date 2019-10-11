<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--js confirmation to delete patient-->
	<script>
        function ConfirmRemove(idd)
            {
            var x = confirm("Are you sure you want to remove?");
            if (x)
               location.href='remove.php?remove='+idd;
            }
    </script>
</head>
<body style="margin:0px;">
<?php
	$conn= new mysqli("localhost","root","","me");
	#check
	if ($conn->connect_error) {
		die("connection failed".$conn->connect_error);
	}
	if($_SERVER["REQUEST_METHOD"] != "POST"){
		$id=$_SESSION['uname']; 
        $sql="SELECT P.id,P.fname,P.lname,A.adate FROM patients as P INNER join appointments as A on P.id=A.patientId and A.aroom=(select room_no from doctors where username='".$id."') order by A.adate";
		if($re=$conn->query($sql)){
	        if($re->num_rows >0){
	            echo "<table id='table'>"; 
		        echo "<tr>"; 
		        echo "<th>Id</th>"; 
		        echo "<th>First name</th>"; 
		        echo "<th>Last Name</th>"; 
		        echo "<th>Appointment Date</th>"; 
		        echo "<th>Action</th>";
		        echo "</tr>"; 
		        while($row=$re->fetch_array()){
		            echo "<tr>";
	                echo "<td>".$row['id']."</td>";
	                echo "<td>".$row['fname']."</td>";
	                echo "<td>".$row['lname']."</td>";
	                echo "<td>".$row['adate']."</td>";
					echo "<td>"."<a class='abtn' href='history.php?id=".$row['id']."'>History</a>
					<a class='abtn' href='analysis.php?id=".$row['id']."'>Analysis</a>
					<button class='abtn' onclick='ConfirmRemove(".$row['id'].")'>Remove</button>
					"."</td>";
	                echo "</tr>";
		        }
		        echo "</table>";
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
    else{
    	$id=$_POST['find'];
    	$sql="SELECT P.id,P.fname,P.lname,A.adate FROM patients as P INNER join appointments as A on (P.id=A.patientId) And (P.id='".$id."' or P.fname='".$id."') order by A.adate";
    	if($re=$conn->query($sql)){
	        if($re->num_rows >0){
	            echo "<table id='table'>"; 
		        echo "<tr>"; 
		        echo "<th>Id</th>"; 
		        echo "<th>First name</th>"; 
		        echo "<th>Last Name</th>";  
		        echo "<th>Appointment Date</th>"; 
		        echo "<th>Action</th>";
		        echo "</tr>"; 
		        while($row=$re->fetch_array()){
		            echo "<tr>";
	                echo "<td>".$row['id']."</td>";
	                echo "<td>".$row['fname']."</td>";
	                echo "<td>".$row['lname']."</td>";
	                echo "<td>".$row['adate']."</td>";
					echo "<td>"."<a class='abtn' href='history.php?history=".$row['id']."'>History</a>
					<a class='abtn' href='analysis.php?id=".$row['id']."'>Analysis</a>
	                <button class='abtn' onclick='ConfirmRemove(".$row['id'].")' >Remove</button>"."</td>";
	                echo "</tr>";
		        }
		        echo "</table>";
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
?>
</body>
</html>