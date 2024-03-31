<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
        <title>Patient | Dashboard</title>
        <!---Bootstrap 5.1.3--->
        <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <!--css file-->
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
                <h1>
                    <!--<label for=""><span></span</label> add icon-->
                    Dashboard
                </h1>
                <div class="lout">
                    <a href="logout.php" class="btn btn-prmaryr">LOG OUT</a>
                </div>
            </header>
            <section class="home">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="card mb-3">
                            <!--<div class="card-header">Patient Health Profile</div>-->
                            <div class="card-body">
                                <h5 class="card-title">Book Appointment</h5>
                                <p class="card-text">Click the Button to book an appointment.</p>
                                <a href="appointment.php" class="btn btn-primary">BOOK HERE</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <!--<div class="card-header">Patient Treatment History</div>-->
                            <div class="card-body">
                                <h5 class="card-title">Treatment History</h5>
                                <p class="card-text">Click the Button  to access your treatment history.</p>
                                <a href="treatment.php" class="btn btn-primary">HISTORY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>