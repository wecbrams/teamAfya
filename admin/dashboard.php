<?php
include('session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin section </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="css/others.css">


</head>
<body>
   <div class="sidebar">
     <div class="sidebar-tittle">
         <h2>Admin </h2>
     </div>
     <hr>
     <div class="sidebar-menu">
        <ul class="listItems">
            <li>
                <a href="dashboard.php">
                    Dashboard
                </a>
            </li>
            <hr>
            <li>
                <a href="doctor.php">
                    Doctors

                </a>
            </li>
            <hr>
            <!-- <li>
                <a href="addoctor.php">
                    Add doctor

                </a>
            </li>
            <hr> -->
            <li>
                <a href="patient.php">
                    Patient
                </a>
            </li>
            <hr>
            <!-- <li>
                <a href="addpatient.php">
                    Add patient
                </a>
            </li>
            <hr> -->
            <li>
                <a href="pharmacist.php">
                  Pharmacist

                    
                </a>
            </li>
            <hr>
            <li>
                <a href="receptionist.php">
                    Receptionist
                </a>
            </li>
        </ul>
     </div>
   </div>

   <!-- Main  -->
   <div class="main">
     <header>
        <h1 class="dashboard">
            Dashboard
        </h1>
        <div class="out">
            <a href="#" class="btn btn-primary">LOG OUT</a>
        </div>
        </header>
        <setion class="home">
            <div class="row">
               <div class="col-sm-6">
                    <div class="card-body">
                        <h5 class="card-title">Add Doctor</h5>
                        <p class="card-text">click the Button to add New Doctor</p>
                        <a href="adddoctor.php" class="btn btn-primary">NEW DOCTOR</a> 
                    </div>

                </div>
            </div>
            <br>
            <div class="col-sm-6">
                <div class="card-body">
                    <h5 class="card-title">Add Patient</h5>
                    <p class="card-text">click the Button to add New patient</p>
                    <a href="addpatient.php" class="btn btn-primary">NEW PATIENT</a> 
                </div>

            </div>
            
        <br>
        
        <div class="col-sm-6">
            <div class="card-body">
                <h5 class="card-title">Add Receptionist</h5>
                <p class="card-text">click the Button to add New Receptionist</p>
                <a href="addreeceptionist.php" class="btn btn-primary">NEW RECEPTIONIST</a> 
            </div>
        </div>
    <br>
    <div class="col-sm-6">
        <div class="card-body">
            <h5 class="card-title">Add Pharmacist</h5>
            <p class="card-text">click the Button to add New Pharmacist</p>
            <a href="addpharmacist.php" class="btn btn-primary">NEW PHARMACIST</a> 
        </div>

    </div>

</div>
<br>
        </setion>
                
          </div>
   
</body>
</html>