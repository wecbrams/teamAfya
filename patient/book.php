<?php
session_start();

if(isset($_POST["btn"])){
    include('connect.php');
    $bdate=$_POST['date'];
    $bname=$_POST['name'];
    $phone=$_POST['contact'];
    $spec=$_POST['speciality'];
    $reason=$_POST['reason'];
    $sql=("insert into appointments(date,fullname,contact,speciality,reason) values('$bdate','$bname','$phone','$spec','$reason')");
    mysqli_query($con, $sql);
    header("location:appointment.php");
}
?>

<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0"
            name="viewport"
            charset="UTF=8"
            http-equiv="Content-Type">
        <title>Patient | Book Appointment</title>
            <!---Bootstrap 5.1.3--->
        <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/book.css">
    </head>
    <body>
        <div class="cont">
            <div class="card">
                <h5 class="card-title">Book Appointment</h5>
                <hr>
                    <div class="card-body">
                        <form action="book.php" method="POST">
                           <div class="row g-3">
                               <div class="col-md-6">
                                   <label for="bdate" class="form-label">Date</label>
                                   <input type="date" class="form-control" id="bdate" name="date">
                               </div>
                               <div class="col-md-6">
                                   <label for="bname" class="form-label">Full Name</label>
                                   <input type="text" class="form-control" id="bname" name="name">
                               </div>
                               <div class="col-md-6">
                                   <label for="contact" class="form-label">Phone Number</label>
                                   <input type="number" class="form-control" id="contact" name="contact">
                               </div>
                               <div class="col-md-6">
                                    <label for="inputState" class="form-label">Speciality</label>
                                    <select id="inputState" class="form-select" name="speciality">
                                    <option selected>Choose Speciality</option>
                                    <option>General Physician - 500/-</option>
                                    <option>Dentist - 1000/-</option>
                                    <option>Surgery - 5000/-</option>
                                    <option>Ear Nose 5000/-</option>
                                    <option>Physiotherapist - 5000/-</option>
                                    <option>Paeditrician - 5000/-</option>
                                    </select>
                                </div>
                               <div class="col-12">
                                   <label for="reason" class="form-label">Enter Brief Reason</label>
                                   <textarea class="form-control" rows="5" id="reason" name="reason"></textarea>
                               </div>
                               <div class="col-md-6">
                                   <a href="appointment.php" class="btn btn-danger">CANCEL</a>
                               </div>
                               <div class="col-md-3">
                                   <button class="btn btn-danger" name="btn" type="submit">BOOK APPOINTMENT</button>
                               </div>
                           </div> 
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>