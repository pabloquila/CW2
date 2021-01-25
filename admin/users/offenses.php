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
            <h1>Offenses</h1>                
    </div>
    <div class="content">
        <div class="card card-primary">
            <div class="card-header">
                <i class="fas fa-search"></i>
                Information
            </div>
        <div class="card-body">
          <table class="table table-bordered" id="data">
              <thead>
                  <tr>
                      <th scope="col" style="width: 10%; font-size: 15px;"> Offense Code</th>
                      <th scope="col" style="width: 15%; font-size: 15px;"> Description</th>
                      <th scope="col" style="width: 20%; font-size: 15px;" >Penalty Points</th> 
                      <th scope="col" style="width: 20%; font-size: 15px;" >Fine </th>   
                      <th scope="col" style="width: 10%; font-size: 10px;" >Options</th>                                         
                  </tr>

              </thead>
              <tbody>
                      <?php
                          include "../includes/dbh.include.php"; 
                          $records = mysqli_query($conn,"select * from offenses");
                           while($data = mysqli_fetch_array($records))
                          {
                      ?>
                      <tr>
                          <td><?php echo $data['offense_code']; ?></td>
                          <td><?php echo $data['offense_description'];?></td>
                          <td><?php echo $data['offense_penalty_points']; ?></td>
                          <td><?php echo $data['offense_fine_gbp']; ?></td>
                          <td>
                              <a class="btn btn-warning btn-xs btn-flat" href="edit.offenses.php?id=<?php echo $data['offense_code']; ?>">
                              <i class="fas fa-edit"></i></a>

                              <a class="btn btn-danger btn-xs btn-flat" href="delete.offenses.php?id=<?php echo $data['offense_code']; ?>">
                              <i class="fas fa-trash-alt"></i></a>
                          </td>
                      </tr>  
                       <?php } ?>   
              </tbody>
           </table>
        </div>

        <div class="card-footer">
          <a href="create.offenses.php" class="btn btn-primary btn-flat btnTest">
              <i class="fas fa-plus"></i> New Offense
          </a>                                
        </div>
      </div>
    </div>
</div>    
</body>

<script src="static/lib/datatables-1.10.20/js/jquery.dataTables.js"></script>
<script src="static/lib/datatables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="static/lib/datatables-1.10.20/plugins/responsive-2.2.3/js/dataTables.responsive.min.js"></script>
<script src="static/lib/datatables-1.10.20/plugins/responsive-2.2.3/js/responsive.bootstrap4.min.js"></script>
<script src="static/js/user/list.js"></script>

</html>