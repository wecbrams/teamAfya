<?php
session_start();

if(isset($_POST["btn"])){
include('connect.php');
$name=$_POST['fullname'];
$email=$_POST['email'];
$residence=$_POST['residence'];
$phone=$_POST['contact'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$ql=("insert into patients(fullname,email,residence,contact,password,cpassword,gender) values('$name','$email','$residence','$phone','$password','$cpassword','$gender')");
if($ql)
{
    echo "<script>alert('Patients added successfully');</script>";
}
mysqli_query($con, $ql);
header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient register</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
</head>
<body>
    <form action="register.php" method="POST">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Patient Registration</h5>
                <hr>
                <div class="row g-3">
                    <!-- Names-->
                    <div class="col-md-6">
                        <label for="fullName" class="form-label">Full Names</label>
                        <input type="text" class="form-control" name="fullname" id="fullname">
                    </div>

                    <div class="col-md-6">
                        <label for="patEmail" class="form-label">Email</label>
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

                    <button type="submit" name="btn" class="btn btn-primary mb-3">REGISTER PATIENT</button> 
                    
                    <div class="text-center mb-3">
                        Already have an accout? <a href="login.php">Log in here</a>
                    </div>                        
                </div>
            </div>
        </div>
    </form>
</body>
</html>