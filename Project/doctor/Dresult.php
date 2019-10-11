<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
    $conn= new mysqli("localhost","root","","me");
    #check
    if ($conn->connect_error) {
        die("connection failed".$conn->connect_error);
    } 
    $id=$_SESSION['id'];
    $sql="SELECT  `blood`, `ultrasound`, `urinalysis`, `sdate` FROM `diagnosisresult` WHERE id='".$id."' ORDER BY sdate desc limit 1";
    if($re=$conn->query($sql)){
        if($re->num_rows >0){
            while($row=$re->fetch_array()){
               $_SESSION['blood']=$row['sdate']."<br>".$row['blood'];
               $_SESSION['ultrasoud']=$row['sdate']."<br>".$row['ultrasound'];
               $_SESSION['urinalysis']=$row['sdate']."<br>".$row['urinalysis'];
            }
            $re->free();
        }
        else { 
            $_SESSION['blood']=null;
            $_SESSION['ultrasoud']=null;
            $_SESSION['urinalysis']=null;
        } 
    }
    else { 
        echo "ERROR: Could not able to execute $sql. " .$conn->error; 
    }
    $conn->close();
?>
    
</body>
</html>