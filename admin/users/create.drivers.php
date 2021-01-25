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
          <h1>Drivers</h1>                
  </div>

  <div class="content">
    <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title"><i class="fas fa-search"></i>
                  CREATE DATA
              </h3>
          </div>

    <div class="card-body">
      <form action="includes/create.drivers.inc.php" method="POST">

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Licence Number</label>
              <input type="text" class="form-control" name="licence_number"  placeholder="Enter Licence Number" Required>
            </div>                  
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Licence Expire Date</label>
              <input type="date"class="form-control" name="expire_date"  placeholder="yyyy-mm-dd" Required>
            </div>                  
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" name="first_name"  placeholder="Enter First Name" Required>
            </div>                  
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text"  class="form-control" name="last_name"  placeholder="Enter Last Name" Required>
            </div>                  
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Date of birth</label>
              <input type="date"  class="form-control" name="dob"  placeholder="yyyy-mm-dd" Required>
            </div>                  
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Emergency Contact </label>
              <input type="text" class="form-control" name="emergency_contact"  placeholder="Enter Emergency Contact" Required>
            </div>                              
          </div>
        </div>
                                
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Address </label>
              <input type="text" class="form-control" name="address"  placeholder="Enter Address" Required>
            </div>                  
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Post code</label>
              <input type="text" class="form-control" name="post_code"  placeholder="Enter Post Code" Required>
            </div>                  
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Penalty Points </label>
              <input type="text" class="form-control" name="penalty_points"  placeholder="Enter Penalty Points " Required>
            </div>                  
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
               <label for="exampleInputEmail1">Amount own</label>
               <input type="text" class="form-control" name="amount_own"  placeholder="Enter Amount" Required>
            </div>                  
          </div>
        </div>

        <input id="a_id"  type="submit" name="submit" value="Create" class="btn btn-primary">
        <input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
      </form>  
      </div>
  </div>
  
</div>  
</body>

</html>