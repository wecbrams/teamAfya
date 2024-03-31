<?php
session_start();

if(isset($_POST["btn"])){
include('connect.php');
$docspeciality=$_POST['specialization'];
$docname=$_POST['fullName'];
$email=$_POST['email'];
$docresidence=$_POST['residence'];
$docphone=$_POST['contact'];
$docfees=$_POST['docFees'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$sql=("insert into doctors(specialization,fullname,email,residence,contact,docFees,password,cpassword,gender) values('$docspeciality','$docname','$email','$docresidence','$docphone','$docfees','$password','$cpassword','$gender')");
if($sql)
{
    echo "<script>alert('Doctor info added successfully');</script>";
}
mysqli_query($con, $sql);
header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor | Register</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
</head>
<body>
    
    <form action="register.php" method="POST"">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Register New Doctor</h5>
            <hr>
            <div class="row g-3">
            <div class="col-md-6">
                    <label for="specialization" class="form-label">Doctor Speciality</label>
                    <input type="text" class="form-control" name="specialization" id="specialization">
                </div>
                <!-- Names-->
                <div class="col-md-6">
                    <label for="fullName" class="form-label">Full Names</label>
                    <input type="text" class="form-control" name="fullName" id="fullName">
                </div>

                <!--email and residence-->
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"> 
                </div>
                <div class="col-md-6">
                    <label for="residence" class="form-label">Residence</label>
                    <input type="text" class="form-control" id="residence" name="residence"> 
                </div>
                <div class="col-md-6">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact">
                </div>
                <div class="col-md-6">
                    <label for="fees" class="form-label">Doctor Fees</label>
                    <input type="text" class="form-control" id="fees" name="docFees">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="cpassword">
                </div>
                <div class="col-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineCheckBox">Male</label>
                        <input class="form-check-input" type="radio" id="inlineCheckBox" name="gender" value="male">
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineCheckBox">Female</label>
                        <input class="form-check-input" type="radio" id="inlineCheckBox" name="gender" value="female">
                    </div>
                </div>

                <button type="submit" name="btn" class="btn btn-primary mb-3">REGISTER DOCTOR</button>
                 
                <div class="text-center mb-3">
                    Already have an accout? <a href="login.php">Log in</a>
                </div> 
            </div>
        </div>
        </div>
    </form>

</body>
</html>