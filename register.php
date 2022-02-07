<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" action="addmember.php">
                                        <div class="form-group mb-3 mb-md-0">
                                            <label for="exampleInputName1">Full Name</label>
                                            <input type="text" class="form-control" id=Name" name="Name"
                                                placeholder="Enter your Name">
                                        </div>

                                        <div class="form-group mb-3 mb-md-0">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="Email" name="Email"
                                                placeholder="Email">
                                        </div>

                                </div>
                                <div class = "col-md-12">
                                <div class="mb-3 mb-md-0">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" id="Gender" name="Gender">
                                        <option selected="selected" value="">--Select Gender </option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div> </div>

                                <div class = "col-md-12">
                                <div class="mb-3">
                                    <label for="dob">Date Of Birth</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="date" name="Dob" required=""
                                            class="form-control datetimepicker-input" data-target="#reservationdate" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div> </div>
                                    </div>
                                    <div class="mb-3 mb-md-0">
                                     <div class=" form-group">
                                        <label for="exampleInputNumber">Telephone Number</label>
                                        <input type="tel" class="form-control" id="Tel_number" name="Tel_number">
                                    </div>
                                    <div class="form group mb-3 mb-md-0">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="Password"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class = "col-md-12">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Agree to Terms and
                                            Condition</label>
                                    </div></div>

                                   <div class="mt-4 mb-0"> 
                                   <div class="d-grid"><button type="submit" name="submit" class="btn btn-dark">Create Account</button></div>
                                   </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>