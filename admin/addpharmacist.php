<?php
session_start();

if(isset($_POST["btn"])){
include('connect.php');
$name=$_POST['fullName'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$sql=("insert into pharmacist(fullname,email,contact,password,cpassword,gender) values('$name','$email','$phone','$password','$cpassword','$gender')");
if($sql)
{
    echo "<script>alert('Pharmacist info added successfully');</script>";
}
mysqli_query($con, $sql);
header("location:pharmacists.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add Pharmacist</title>
     
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="css/add.css">


</head>
<body>
    <div class="card">
        <h3 class="card-title">Creacte New Pharmacist</h3>
        <hr>
        <div class="card-body">
            <form action="addpharmacist.php" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="fullname">
                       
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label" >Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        
                    </div>

                    <div class="col-md-6">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="contact" name="contact" required>
                        
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                  
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="cpassword" required>
                        
                    </div>

                    <div class="col-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckBox" name="gender" value="male">
                            <label for="inlineCheckBox" class="form-check-inline">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckBox" name="gender" value="Female">
                            <label for="inlineCheckBox" class="form-check-inline">Female</label>
                        </div>
                    </div>

                    <button type="submit" name="btn" class="btn btn-primary mb-3">REGISTER</button>

                    <a href="dashboard.php" class="btn btn-primary">CANCEL</a>

                </div>
            </form>
        </div>
    </div>
</body>
</html>