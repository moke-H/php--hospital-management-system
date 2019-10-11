<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--js confirmation to delete patient-->
	<script>
        function ConfirmDelete(idd)
            {
            var x = confirm("Are you sure you want to delete?");
            if (x)
               location.href='delete.php?delete='+idd;
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
		$sql="SELECT *FROM patients order by id desc";
		if($re=$conn->query($sql)){
	        if($re->num_rows >0){
	            echo "<table id='table'>"; 
		        echo "<tr>"; 
		        echo "<th>Id</th>"; 
		        echo "<th>First name</th>"; 
		        echo "<th>Last Name</th>"; 
		        echo "<th>Gender</th>"; 
		        echo "<th>Birth Date</th>"; 
		        echo "<th>Address</th>";
		        echo "<th>Action</th>";
		        echo "</tr>"; 
		        while($row=$re->fetch_array()){
		            echo "<tr>";
	                echo "<td>".$row['id']."</td>";
	                echo "<td>".$row['fname']."</td>";
	                echo "<td>".$row['lname']."</td>";
	                echo "<td>".$row['gender']."</td>";
	                echo "<td>".$row['bdate']."</td>";
	                echo "<td>".$row['address']."</td>";
	                echo "<td>"."<a class='abtn' href='edit.php?edit=".$row['id']."'>Edit</a>
					<button class='abtn' onclick='ConfirmDelete(".$row['id'].")'>Delete</button>"."</td>";
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
    	$sql="SELECT *FROM patients where id='".$id."' or fname='".$id."'";
    	if($re=$conn->query($sql)){
	        if($re->num_rows >0){
	            echo "<table id='table'>"; 
		        echo "<tr>"; 
		        echo "<th>Id</th>"; 
		        echo "<th>First name</th>"; 
		        echo "<th>Last Name</th>"; 
		        echo "<th>Gender</th>"; 
		        echo "<th>Birth Date</th>"; 
		        echo "<th>Address</th>";
		        echo "<th>Action</th>";
		        echo "</tr>"; 
		        while($row=$re->fetch_array()){
		            echo "<tr>";
	                echo "<td>".$row['id']."</td>";
	                echo "<td>".$row['fname']."</td>";
	                echo "<td>".$row['lname']."</td>";
	                echo "<td>".$row['gender']."</td>";
	                echo "<td>".$row['bdate']."</td>";
	                echo "<td>".$row['address']."</td>";
	                echo "<td>"."<a class='abtn' href='edit.php?edit=".$row['id']."'>Edit</a>
	                         <button class='abtn' onclick='ConfirmDelete(".$row['id'].")' >Delete</button>"."</td>";
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