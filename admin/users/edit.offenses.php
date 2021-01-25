<?php
session_start();
require_once '../templates/header.menu.php';
require_once "../includes/dbh.include.php"; 
$id = $_GET['id']; 
$qry = mysqli_query($conn,"select * from offenses where offense_code='$id'"); 
$data = mysqli_fetch_array($qry); // fetch data


if(isset($_POST['update'])) {
    
    $offense_code = $_POST['offense_code'];
    $offense_description = $_POST['offense_description'];
    $offense_penalty_points = $_POST['offense_penalty_points'];
    $offense_fine_gbp = $_POST['offense_fine_gbp'];
    
    
    $edit = mysqli_query($conn,"update offenses set 
            offense_code='$offense_code',
            offense_description='$offense_description',
            offense_penalty_points = '$offense_penalty_points',
            offense_fine_gbp = '$offense_fine_gbp'
            where offense_code='$id';");
    
    if($edit)
    {
        mysqli_close($conn);    
        header("location: offenses.php"); // redirect
        exit();
    }
    else
    {
        mysqli_close($conn); 
        header("location: offenses.php"); // redirect
        exit();
    }       
}

if(isset($_POST['cancel'])) {
    header("Location: offenses.php");
    exit();
}

?>

<?php require_once '../templates/header.php'; ?>
</head>

<body>
<!-- SIDE BAR -->
    
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
    <div class="content-header" style="padding-left: 20px">
            <h1>Offenses</h1>                
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
                            <label for="exampleInputEmail1">Offense Code</label>
                            <input type="text" class="form-control" name="offense_code" value="<?php echo $data['offense_code'] ?>" placeholder="Enter code" Required>
                        </div>                         
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text"class="form-control" name="offense_description" value="<?php echo $data['offense_description'] ?>" placeholder="Description" Required>
                        </div>                                                            
                    </div>
                </div>
                <div class="row">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Penalty Points</label>
                        <input type="text" class="form-control" name="offense_penalty_points" value="<?php echo $data['offense_penalty_points'] ?>" placeholder="Enter Points" Required>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fine</label>
                            <input type="text"class="form-control" name="offense_fine_gbp" value="<?php echo $data['offense_fine_gbp'] ?>" placeholder="Description" Required>
                        </div>                                                            
                    </div>
                </div>
                     
                <input type="submit" name="update" value="Update" class="btn btn-primary">
                <input type="submit" name="cancel" value="Cancel" class="btn btn-danger">             


            </form>           
        </div>
    </div>
</div> 
</body>

<script type="text/javascript">
    if(isset($_POST['cancel'])) {
        header("Location: offenses.php");
        exit();
    }
</script>
</html>