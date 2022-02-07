<?php
include 'db.php';

if (isset($_GET['deleteid'])){
    //to get your delete id variable and store
    
$Id = $_GET['deleteid'];

$sql="delete from users where Id=$Id";
$result = mysqli_query($con,$sql);
if($result) {
    //echo "Deleted Successfully";
    header('location:tables.php');

} else {
    die(mysqli_error($con));
}

}





?>