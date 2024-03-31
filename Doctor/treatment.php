<?php

if(isset($_POST["btn"])){
    include("connect.php");
    $tdate=$_POST['date'];
    $tname=$_POST['name'];
    $diagnosis=$_POST['diagnosisEntry'];
    $treatment=$_POST['treatmentEntry'];
    $sql=("insert into treatment(date,fullname,diagnosis,treatment)values('$tdate','$tname','$diagnosis','$treatment')");
    mysqli_query($con, $sql);
    header("location:dashboard.php");
    //header relocate to prompt success first
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor | treatment</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/add.css">

</head>
<body>
    
        <div class="card">
            <h3 class="card-title">Treat Patient <!--html code to echo patient details--></h3>
            <div class="card-body">
                <form action="patients.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="tdate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="tdate" name="date">  
                        </div>
                        <div class="col-md-6">
                            <label for="tname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="tname" name="name">
                        </div>
                        <div class="input-group mb-2">
                            <textarea class="form-control" rows="8" name="diagnosisEntry" placeholder="Enter Diagnosis"></textarea>
                        </div>
                        <div class="input-group mb-2">
                            <textarea class="form-control" rows="8" name="treatmentEntry" placeholder="Enter Treatment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>