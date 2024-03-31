<?php
include("connect.php");
$q = "SELECT * FROM patients ORDER BY id DESC";
$result = $con->query($q);
$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor | Patient</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/others.css">

</head>
<body>
    
    <div class="sidebar">
        <div class="sidebar-title">
            <h2>Doctor</h2>
        </div>
        <hr>
        <div class="sidebar-menu">
            <ul class="listItems">
                <li>
                    <a href="dashboard.php">
                        <!--add icon using span-->
                        Dashboard
                    </a>
                </li>
                <hr>
                <li>
                    <a href="appointment.php">
                        <!--add icon using span-->
                        Appointments
                    </a>
                </li>
                <hr>
                <li>
                    <a href="patients.php">
                        <!--add icon using span-->
                        Patients
                    </a>
                </li>
                <hr>
            </ul>
        </div>
    </div>
    <div class="main">
        <header>
            <h1>
                <!--<label for=""><span></span</label> add icon-->
                Patients
            </h1>
        </header>
        <section class="home">
            <!--Page heading
            <h1 class="h3 mb-4 text-gray-800">Patient Management</h1>-->

            <!--DataTables Example-->
            <span id="message"></span>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-danger">Patient List</h6>
                        </div>
                        <!--<div class="col" align="right">
                            <button type="button" name="add_doctor" id="add_doctor" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                        </div>-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderd" id="doctor_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Contact</th>
                                    <th>Residence</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                        while($rows=$result->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['fullname'];?></td>
                                        <td><?php echo $rows['email'];?></td>
                                        <td><?php echo $rows['contact'];?></td>
                                        <td><?php echo $rows['residence'];?></td>
                                        <td><?php echo $rows['gender'];?></td>
                                        <td>
                                        <a href="treatment.php" class="btn btn-warning">TREAT</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>