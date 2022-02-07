<?php
include 'db.php';
if(isset($_POST['submit'])) {

    $Name =$_POST['Name'];
    $Email =$_POST['Email'];
    $Gender =$_POST['Gender'];
    $Dob =$_POST['Dob'];
    $Tel_number =$_POST['Tel_number'];
    $Password =$_POST['Password'];

    $sql = "INSERT INTO users (Name,Email,Gender,Dob,Tel_number,Password) 
     Values ('$Name','$Email','$Gender','$Dob','$Tel_number','$Password')";


    $result =mysqli_query($con,$sql);
    if($result) {

        header('location:tables.php');
    } else {
        die('Query Failed');
    }
}




?>