<?php
include("connect.php");
$q="SELECT * FROM appointments ORDER BY id DESC";
$result = $con->query($q);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient appointment</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="/admin/css/others.css">  
</head>
<body>
    
    <div class="sidebar">
        <div class="sidebar-title">
            <h2>Patient</h2>
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
                    <a href="treatment.php">
                        <!--add icon using span-->
                        Treatment History
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#">
                        <!--add icon using span-->
                        Profile
                    </a>
                </li>
                <hr>
            </ul>
        </div>
    </div>

    

    <div class="main">
        <header>
            <h2>
                <!--<label for=""><span></span</label> add icon-->
                View | Book Appointments
            </h2>
        </header>
        <section class="home">
           <span id="message"></span>
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold">Appointments</h6>
                        </div>
                        <div class="col" align="right">
                            <!--<button class="btn btn-danger" onclick="openForm()">BOOK NEW</button>-->
                            <a href="book.php" class="btn btn-primary">BOOK</a>
                        </div>
                        <!--<div class="col" align="right">
                            <button type="button" name="add_doctor" id="add_doctor" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                        </div>-->
                    </div>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered" id="appointment_table" width="100%" cellspacing="0">
                           <thead>
                               <tr>
                                   <th>Date</th>
                                   <th>Name</th>
                                   <th>Contact</th>
                                   <th>Speciality</th>
                                   <th>Reason</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <?php
                                    while($rows=$result->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $rows['date'];?></td>
                                    <td><?php echo $rows['fullname'];?></td>
                                    <td><?php echo $rows['contact'];?></td>
                                    <td><?php echo $rows['speciality'];?></td>
                                    <td><?php echo $rows['reason'];?></td>
                                    <td>
                                        <a href="#" class="btn btn-danger">DELETE</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                       </table>
                   </div>
               </div>
                </div>
            </div>
        </section>
</body>
</html>