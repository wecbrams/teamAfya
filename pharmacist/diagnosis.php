<?php
include("connect.php");
$q = "SELECT * FROM treatment ORDER BY id DESC";
$result = $con->query($q);
$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacist diagnosis</title>
    <link rel="stylesheet" href="/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css">
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
                Diagnosis Administration
            </h1>
        </header>
        <section class="home">
            <span id="message"></span>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-success">Treated Patients</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderd" id="doctor_table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Diagnosis</th>
                                    <th>Treatment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            while($rows=$result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['date'];?></td>
                            <td><?php echo $rows['fullname'];?></td>
                            <td><?php echo $rows['diagnosis'];?></td>
                            <td><?php echo $rows['treatment'];?></td>
                            <td>
                                <button class="btn btn-light" id="btn" onclick="serve()">SERVE</button>
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
    <script>
            const btn = document.getElementById('btn');
            btn.addEventListener('click', function handleClick() {
                btn.textContent = 'SERVED';
                btn.style.background = 'green';
            });
        </script>
</body>
</html>