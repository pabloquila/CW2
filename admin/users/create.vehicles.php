<?php
  session_start();
  require_once '../templates/header.menu.php';?>
<?php require_once '../templates/header.php'; ?>
</head>

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
  <div class="content-header" style="padding-left: 20px">
          <h1>Vehicles</h1>                
  </div>

  <div class="content">
      <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title"><i class="fas fa-search"></i>
                  CREATE DATA
              </h3>
          </div>

      <div class="card-body">

      <form action="includes/create.vehicles.inc.php" method="POST">

          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Vehicle ID</label>
                    <input type="text" class="form-control" name="vehicle_id"  placeholder="Enter Vehicle ID" Required>
              </div>
                  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Licence Number</label>
                      <input type="text" class="form-control" name="licence_number"  placeholder="Enter Licence Number" Required>
                  </div>                  
              </div>
          </div>

          <div class="row">                                         
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Owner</label>
                      <input type="text" class="form-control" name="owner"  placeholder="Enter Owner" Required>
                  </div>                  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chasis</label>
                    <input type="text"  class="form-control" name="chasis_frame_number"  placeholder="Enter Chasis" Required>
                  </div>                  
              </div>
          </div>
                
          <div class="row">                                         
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Brand</label>
                      <input type="text"class="form-control" name="brand"  placeholder="Enter Brand" Required>
                  </div>                  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Model </label>
                      <input type="text" class="form-control" name="model"  placeholder="Enter Model" Required>
                  </div>                  
              </div>
          </div>

          <div class="row">                                         
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Colour</label>
                      <input type="text" class="form-control" name="colour"  placeholder="Enter Colour" Required>
                  </div>                  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Motor Insurance </label>
                      <input type="text" class="form-control" name="motor_insurance_number"  placeholder="Enter Motor Insurance " Required>
                  </div>                  
              </div>
          </div>     
          
          <input type="submit" name="submit" value="Create" class="btn btn-primary">
          <input type="submit" name="cancel" value="Cancel" class="btn btn-danger">        
      </form>                   
  </div>
  
</div>  

</body>
</html>