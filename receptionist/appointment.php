<?php
include("connect.php");
$q="SELECT * FROM appointments ORDER BY id DESC";
$result = $con->query($q);
$con->close();
?>

<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
        <title>Reception</title>
        <!---Bootstrap 5.1.3--->
        <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <!--css file-->
        <link rel="stylesheet" href="/admin/css/others.css">        
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-title">
                <h2>Receptionist</h2>
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
                </ul>
            </div>
        </div>

        

        <div class="main">
            <header>
                <h2>
                    <!--<label for=""><span></span</label> add icon-->
                    View Appointments
                </h2>
            </header>
            <section class="home">
               <span id="message"></span>
               <div class="card shadow mb-4">
                   <div class="card-header py-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="m-0 font-weight-bold text-primary">Appointments</h6>
                            </div>
                            <!--<div class="col" align="right">-->
                                <!--<button class="btn btn-danger" onclick="openForm()">BOOK NEW</button>-->
                                <!--<a href="book.php" class="btn btn-danger">BOOK</a>
                            </div>-->
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
                                   <button class="btn btn-light" id="btn" onclick="approve()">CONFIRM</button>
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
            <script>
                const btn = document.getElementById('btn');
                btn.addEventListener('click', function handleClick() {
                    btn.textContent = 'CONFIRMED';
                    btn.style.background = 'green';
                });
            </script>
    </body>   
</html>

