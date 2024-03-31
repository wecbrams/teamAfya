<?php
session_start();
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $q = "select id from pharmacist where email = '$email' and password = '$password'";
    $result = mysqli_query($con, $q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['login_user'] = $email;

        header("location: dashboard.php");
    }else{
        $error = "Invalid Email and password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient treatment</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
</head>
<body>
    <form action="login.php" action="" method="POST">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pharmacist Login</h5>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmail" name="email">
                    <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <!--<div class="text-center mb-3">
                    <a href="#">Forgot Password?</a>
                </div>-->
                
                <button type="submit" name="btn" class="btn btn-primary mb-3">LOG IN</button>  

            </div>
        </div>
    </form>
</body>
</html>