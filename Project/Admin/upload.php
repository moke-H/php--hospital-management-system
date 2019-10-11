<?php
session_start();
    $msg="";
    $css_class="";

    if(isset($_POST['filem'])){
        $conn= new mysqli("localhost","root","","me");
        if ($conn->connect_error) {
            die("connection failed".$conn->connect_error);
        }
        $proimg=time().'_'.$_FILES['file']['name'];
        $target='images/'.$proimg;
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
            $x=$_SESSION['uname'];
            $sql="INSERT INTO `img-upload`( `user`,`images`) VALUES ('$x','$proimg')";
            if($conn->query($sql)==true){
                header("location:home.php");
            }
            else{
                $sql2="UPDATE `img-upload` SET `images`='$proimg' WHERE  `user`='$x'";
                if($conn->query($sql2)==true){
                    header("location:home.php");
                }
            }
            $msg="image uploaded";
            $css_class="alert_succsess";
        }
        else{
            $msg="image uploaded failed";
            $css_class="alert_danger";
        }
    }
 
 ?>