<?php
  session_start();
  require_once '../templates/header.menu.php';?>

<?php require_once '../templates/header.php'; ?>

</head>
<link href="static/style.css" rel="stylesheet"/>

<body>
    
<aside class="main-sidebar sidebar-light-primary elevation-4" style="height: 100%">
    <a > <img src="static/img/logo.jpg" alt="Logo" class="center" id="logo"> </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <h2 style="margin-left: 10px;">Menu</h2>
                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="../dashboard.php" onclick="clickAndDisable(this);">Home</a>
                </li>
                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="../users/drivers.php" onclick="clickAndDisable(this);">Drivers</a>
                </li>
                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="../users/vehicles.php" onclick="clickAndDisable(this);">Vehicles</a>
                </li>
                <li style="margin: 20px">
                  <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                  <a href="../users/offenses.php" onclick="clickAndDisable(this);">Offenses Type</a>
              </li>
                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="../reports/reports.php" onclick="clickAndDisable(this);">Reports</a>
                </li>
                <li style="margin: 20px">
                  <i class="fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                  <a href="../users/users.php" onclick="clickAndDisable(this);"> Users</a>
              </li>
              <li style="margin: 20px">
                  <i class="fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                  <a href="../users/officers.php" onclick="clickAndDisable(this);">Officers</a>
              </li>
                <li style="margin: 20px">
                    <i class="fas fa-power-off" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="../includes/logout.inc.php" onclick="clickAndDisable(this);">LOGOUT</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<div class="content-wrapper">

<div class="content" style="margin-top: 20px">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-search"></i>
            Generate Report
            </h3>
        </div>

        <form action="includes/report.create.inc.php" method="POST">

            <div class="row" style="margin:10px;padding-top: 10px">  
                <div class="col-lg-3" style="margin: 0px; ">
                    <div class="card card-secondary">                        
                        <div class="card-body" style="padding-bottom: 50px">
                            <div class="form-group " style="margin-bottom: 40px" >
                                <h5 style="margin-bottom: 10px;">First Name</h5>
                                <input type="text" class="form-control" name="first_name"  placeholder="Enter Name" required>
                                <div class="result"></div>
                            </div> 

                            <div class="form-group " style="margin-bottom: 40px" >
                                <h5 style="margin-bottom: 10px;">Last Name</h5>
                                <input type="text" class="form-control"  name="last_name" placeholder="Enter Last Name" required>
                                <div class="result"></div>
                            </div> 

                            <div class="form-group" style="margin-bottom: 47px;">
                                <h5 style="margin-bottom: 10px;">Time</h5>
                                <input  style="width: 100%;" type="time" class="form-control" name="time" required>
                            </div>
                            
                            <div class="form-group search-box"  >
                                <h5 style="margin-bottom: 27px;">Date</h5>
                                <input  style="width: 100%; " type="date" class="form-control" name="date"
                                placeholder="yyy-mm-dd" required>
                            </div>                     
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style="margin:0px;">
                    <div class="card card-secondary">                           
                        <div class="card-body">                            
                            <div class="form-group search-box search2" style="margin-left: 20px;margin-bottom: 50px">
                                <h5 style="margin-bottom: 10px;">Licence Number</h5>
                                <input type="text" class="form-control"  name="licence_number" placeholder="Enter licence Number" required>
                                <div class="result"></div>
                            </div>                                    

                            <div class="form-group search-box search3" style="margin-left: 20px;margin-bottom: 50px">
                                <h5 style="margin-bottom: 10px;">Vehicle ID</h5>
                                <input name="vehicle_id" type="text" class="form-control"  placeholder="Enter Vehicle ID" required>
                                <div class="result"></div>
                            </div>                                    

                            <div class="form-group search-box search4" style="margin-left: 20px;margin-bottom: 50px">
                                <h5 style="margin-bottom: 10px;">Offense</h5>
                                    <input name="offense_code" type="text" class="form-control"  placeholder="Enter Offense" required>
                                    <div class="result"></div>
                            </div>
                            <div class="form-group" style="margin-left: 20px;margin-bottom: 55px">
                                <h5 style="margin-bottom: 15px;">Penalty Points</h5>
                                    <input name="penalty_points" type="text" class="form-control"  placeholder="Enter Points" required>
                                    <div class="result"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="margin:0px;">
                    <div class="card card-secondary">                           
                        <div class="card-body">
                            <div class="form-group search-box" style="margin-bottom: 45px" >
                                <h5 style="margin-bottom: 10px;">Location</h5>
                                <input name="location" type="text" class="form-control"  placeholder="Enter Location" required>
                                <div class="result"></div>
                            </div> 
                            <div class="form-group search-box search5" style="margin-bottom: 50px">
                                <h5 style="margin-bottom: 10px;">Officer ID</h5>
                                <input type="text" class="form-control"  name="officer_id" placeholder="Enter Officer ID" required>
                                <div class="result"></div>
                            </div> 
                            <div class="form-group" style="margin-bottom: 50px">
                                <h5 style="margin-bottom: 10px;">Fine</h5>
                                <input type="text" class="form-control"  name="fine_gbp" placeholder="Enter Fine" required>
                                <div class="result"></div>
                            </div>

                            <div class="form-group" >
                                <h5 >Note</h5>
                              <textarea name="statement" id="inputMessage" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input style="margin-left: 20px" type="submit" name="submit" value="Create" class="btn btn-primary">
            <input type="submit" name="cancel" value="Cancel" class="btn btn-danger" required>
            
            <?php
            include "../includes/dbh.include.php";
            ?>
            <?php 
                $records = mysqli_query($conn,"select * from reports");
                $data = mysqli_fetch_array($records)
                ?>
                
        </form>

    </div>
  
  
</div> 
<script src="static/functions.js"></script>

</body>


