<?php
include 'db.php';
$Id=$_GET['editid'];
$sql="SELECT * FROM users where Id=$Id";
$result =mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name =$row['Name'];
$Email =$row['Email'];
$Gender =$row['Gender'];
$Dob =$row['Dob'];
$Tel_number=$row['Tel_number'];
$Password = $row['Password'];

if(isset($_POST['submit'])) {

    $Name =$_POST['Name'];
    $Email =$_POST['Email'];
    $Gender =$_POST['Gender'];
    $Dob =$_POST['Dob'];
    $Tel_number =$_POST['Tel_number'];
    $Password =$_POST['Password'];

    $sql = "UPDATE users SET Id='$Id',Name ='$Name',Gender='$Gender',
    Dob='$Dob',Tel_number='$Tel_number',Password='$Password' 
    where Id=$Id ";


    $result =mysqli_query($con,$sql);
    if($result) {

        header('location:tables.php');
    } else {
        die('Query Failed');
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body class="bg primary">

    <form method="POST">
        <div class="form-group col-md-6">
            <label for="exampleInputName1">Full Name</label>
            <input type="text" class="form-control" id=Name" name="Name" value=<?php echo $Name; ?> placeholder="Enter your Name">
        </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="Email" name="Email" value=<?php echo $Email; ?> placeholder="Email">
        </div>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleSelectGender">Gender</label>
            <select class="form-control" id="Gender" name="Gender" value=<?php echo $Gender; ?>>
                <option selected="selected" value="">--Select Gender </option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="dob">Date Of Birth</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="Dob" required="" value=<?php echo $Dob; ?> class="form-control datetimepicker-input"
                    data-target="#reservationdate" />
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            <div class="col-md-6>
                     <div class=" form-group">
                <label for="exampleInputEmail">Telephone Number</label>
                <input type="tel" class="form-control" id="Tel_number" name="Tel_number" value=<?php echo $Tel_number; ?>>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="Password" id="exampleInputPassword1" value=<?php echo $Password; ?>>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>