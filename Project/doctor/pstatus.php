<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //connection
        $conn= new mysqli("localhost","root","","me");
        if ($conn->connect_error) {
            die("connection failed".$conn->connect_error);
        }
        $ps=$_POST['pstatus'];
        $id=$_SESSION['id'];
        $tdate=date("Y-m-d h:i:s");
        $sql="INSERT INTO `dresult`(`id`, `result`, `tdate`) VALUES ('".$id."','".$ps."','".$tdate."')";
        if($conn->query($sql)===true){
            header("Location:analysis.php?id=$id");
        }
        else{
            echo "query faild".$conn->error;
        }
        $conn->close();
    }     
?>