<?php
include("connect.php");
$q = "SELECT * FROM pharmacist ORDER BY id DESC";
$result = $con->query($q);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin section Pharmacist</title>
    
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
            <li>
                <a href="addoctor.php">
                    Add doctor

                </a>
            </li>
            <hr>
            <li>
                <a href="patient.php">
                    Patient
                </a>
            </li>
            <hr>
            <li>
                <a href="addpatient.php">
                    Add patient
                </a>
            </li>
            <hr>
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
        <setion class="Home">
            <h1 class="h3 mb-4 text-white">Pharmacist Management</h1>
            <span id="message"></span>
            <div class="card-header py-3">
                <div class="row">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-white">Pharmacist List</h6>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-border" id="doctor_table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Contact</th>
                                <th>Gender</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <?php
                                        while($rows=$result->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['fullname'];?></td>
                                        <td><?php echo $rows['email'];?></td>
                                        <td><?php echo $rows['contact'];?></td>
                                        <td><?php echo $rows['gender'];?></td>
                                        <td><?php echo $rows['password'];?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                    </div>
                </div>
            </div>
        </setion>
     </header>
   </div>
</body>
</html>