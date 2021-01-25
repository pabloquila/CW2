<?php
    session_start();
?>

<!-- HEADER -->
<?php include '../templates/header.php'; ?>
    <link rel="stylesheet" href="../static/lib/datatables-1.10.20/css/dataTables.bootstrap4.min.css"/>

</head>
<?php require_once '../templates/header.menu.php'; ?>

<body>
<!-- SIDE BAR -->    
<aside class="main-sidebar sidebar-light-primary elevation-4">
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
            <h1>Drivers</h1>                
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
                            <th scope="col" style="width: 10%; font-size: 15px;">Licence Number</th>
                            <th scope="col" style="width: 20%; font-size: 15px;" >Full Name</th>
                            <th scope="col" style="width: 15%; font-size: 15px;" >Expire date</th>                                    
                            <th scope="col" style="width: 10%; font-size: 15px;" >Post Code </th>
                            <th scope="col" style="width: 5%; font-size: 15px;" >Emergency Contact</th>
                            <th scope="col" style="width: 10%; font-size: 15px;">Total Points</th>
                            <th scope="col" style="width: 10%; font-size: 15px;" >Amount due</th>  
                            <th scope="col" style="width: 10%; font-size: 15px;" >Options</th>                                     
                        </tr>

                    </thead>
                        <tbody>
                            <?php
                                include "../includes/dbh.include.php"; 
                                $records = mysqli_query($conn,"select * from drivers");
                                 while($data = mysqli_fetch_array($records))
                                {
                            ?>
                            <tr>
                                <td><?php echo $data['licence_number']; ?></td>
                                <td><?php echo $data['first_name']." ".$data['last_name'];?></td>
                                <td><?php echo $data['expire_date']; ?></td>
                                <td><?php echo $data['post_code']; ?></td>
                                <td><?php echo $data['emergency_contact']; ?></td>
                                <td><?php echo $data['total_penalty_points']; ?></td>
                                <td><?php echo $data['total_fine_gbp']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-xs btn-flat" href="edit.drivers.php?id=<?php echo $data['licence_number']; ?>">
                                    <i class="fas fa-edit"></i></a>

                                    <a class="btn btn-danger btn-xs btn-flat" href="delete.drivers.php?id=<?php echo $data['licence_number']; ?>">
                                    <i class="fas fa-trash-alt"></i></a>                                    
                                </td>
                            </tr>  
                             <?php } ?>     

                        </tbody>
                </table>
        </div>


            <div class="card-footer">
                <a href="create.drivers.php" class="btn btn-primary btn-flat btnTest">
                    <i class="fas fa-plus"></i> New Driver
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