<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <!-- Cascading stylesheets -->
    <link rel="stylesheet" href="styles/index.css">
    
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-colunm">
        <header class="mb-auto">
            <div>
            <h3 class="float-md-start mb-0">Homepage</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="#"> Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Contacts</a>
            </nav>
        </div>
    
        </header>
    </div>
    
        <!-- Main - This is where the major part of the content begins from-->
        <main class="px-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


                    <!--admin-->
                <div class="col d-flex align-items-start">
                    <div>
                            <h2>Admin</h2>
                            <a href="admin/login.php" class="btn btn-primary fw-bold"> Sign In</a>
                    </div>
                </div>
        
                <!--Receptionist-->
                <div class="col d-flex align-items-start">
                     <div>
                        <h2>Receptionist</h2>
                        <a href="receptionist/login.php" class="btn btn-primary fw-bold"> Sign In</a>
                    </div>
                </div>

                <!--Patient-->
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>Patient</h2>
                        <a href="patient/login.php" class="btn btn-primary fw-bold"> Sign In</a>
                    </div>
                </div>

                <!--Guest-->
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>Guest</h2>
                        <a href="book.php" class="btn btn-primary fw-bold"> Book</a>
                    </div>
                </div>
                
                <!--Doctor-->
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>Doctor</h2>
                        <a href="Doctor/login.php" class="btn btn-primary fw-bold"> Sign In</a>
                    </div>
                </div>

    
                <!--Pharmacist-->
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>Pharmacist</h2>
                        <a href="pharmacist/login.php" class="btn btn-primary fw-bold"> Sign In</a>
                    </div>
                </div>

        </div>
    

    </main>

    <!--footer-->
    
    <footer class=" text-white-50">
        <p>&copy Copyrights</p>
    </footer>
    </div>

<!-- <script src="styles/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script> -->

</body>
</html>