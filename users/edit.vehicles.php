<?php
    session_start();
     require_once '../templates/header.menu.php';

    require_once "../includes/dbh.include.php"; 
    $id = $_GET['id']; 
    $qry = mysqli_query($conn,"select * from vehicles where vehicle_id='$id'");  
    $data = mysqli_fetch_array($qry); 


    if(isset($_POST['update'])) 
    {
        $vehicle_id = $_POST['vehicle_id'];
        $licence_number = $_POST['licence_number'];
        $owner = $_POST['owner'];
        $motor_insurance_number = $_POST['motor_insurance_number'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $chasis_frame_number = $_POST['chasis_frame_number'];
        $colour = $_POST['colour'];
       

       $edit = mysqli_query($conn,"update vehicles set vehicle_id='$vehicle_id', owner='$owner', licence_number='$licence_number',
        motor_insurance_number = '$motor_insurance_number', brand = '$brand', model = '$model', chasis_frame_number = '$chasis_frame_number',
        colour = '$colour' where vehicle_id='$id'"); 
        
        if($edit)
        {
            mysqli_close($conn); 
            header("location: vehicles.php"); // redirects 
            exit();
        }
        else
        {
        header("Location: vehicles.php");
        }       
    }

    if(isset($_POST['cancel'])) {
        header("Location: vehicles.php");
        exit();
    }


?>

<?php require_once '../templates/header.php'; ?>
</head>

<body>
<!-- SIDE BAR -->
    
<aside class="main-sidebar sidebar-light-primary elevation-4" style="height: 100%">
    <a> <img src="static/img/logo.jpg" alt="Logo" class="center" id="logo"> </a>
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
                    <a href="../reports/reports.php" onclick="clickAndDisable(this);">Reports</a>
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
        <div class="content-header" style="padding-left: 20px">
                <h1>Vehicles</h1>                
        </div>

        <div class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-search"></i>
                        UDPADE DATA
                    </h3>
                </div>

            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vehicle ID</label>
                                <input type="text" class="form-control" name="vehicle_id" value="<?php echo $data['vehicle_id'] ?>" placeholder="Enter Vehicle ID" Required>
                            </div>                            
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label for="exampleInputEmail1">Licence Number</label>
                                <input type="text" class="form-control" name="licence_number" value="<?php echo $data['licence_number'] ?>" placeholder="Enter Licence Number" Required>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Owner</label>
                        <input type="text" class="form-control" name="owner" value="<?php echo $data['owner'] ?>" placeholder="Enter Full Name" Required>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Chasis Frame Number</label>
                                <input type="text" class="form-control" name="chasis_frame_number" value="<?php echo $data['chasis_frame_number'] ?>" placeholder="Enter Frame Number" Required>
                            </div>                                                                                    
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Motor Insurance Number</label>
                                <input type="text" class="form-control" name="motor_insurance_number" value="<?php echo $data['motor_insurance_number'] ?>" placeholder="Enter Insurance Number" Required>
                            </div>                                                         
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand</label>
                                <input type="text" class="form-control" name="brand" value="<?php echo $data['brand'] ?>" placeholder="Enter Brand" Required>
                            </div>                                                        
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Model</label>
                                <input type="text" class="form-control" name="model" value="<?php echo $data['model'] ?>" placeholder="Enter Model" Required>
                            </div>                                                         
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Colour</label>
                                <input type="text" class="form-control" name="colour" value="<?php echo $data['colour'] ?>" placeholder="Enter Full Name" Required>
                            </div>                                                         
                        </div>
                    </div>  
                    <input type="submit" name="update" value="Updated" class="btn btn-primary">
                    <input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
                </form>  

                       
            </div>
        </div>
    </div>    
</body>
</html>