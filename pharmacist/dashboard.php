<html>
    <head>
    <meta content="width=device-width, initial-scale=1.0"
        name="viewport"
        charset="UTF=8"
        http-equiv="Content-Type">
        <title>Pharmacy Section</title>
        <!---Bootstrap 5.1.3--->
        <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <!--css file-->
        <link rel="stylesheet" href="/admin/css/others.css">
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-title">
                <h2>Pharmacist</h2>
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
                        <a href="diagnosis.php">
                            <!--add icon using span-->
                            Diagnosis Administration
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
                    <a href="logout.php" class="btn btn-primary">LOG OUT</a>
                </div>
            </header>
            <section class="home">
            <div class="row">
                    <div class="col-sm-6">
                        <div class="card mb-3">
                            <!--<div class="card-header">Patient Health Profile</div>-->
                            <div class="card-body">
                                <h5 class="card-title">Patients</h5>
                                <p class="card-text">Click the Button below to see which patients have been treated</p>
                                <a href="diagnosis.php" class="btn btn-primary">CHECK HERE</a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-sm-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">View Stock</h5>
                                <p class="card-text">Click the Button below to view medical stock.</p>
                                <a href="#" class="btn btn-dark">CHECK HERE</a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </section>
        </div>
    </body>
</html>