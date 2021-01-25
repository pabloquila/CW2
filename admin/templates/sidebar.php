
<!-- SIDE BAR -->
    
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="index.php">
            <img src="static/img/logo.jpg" alt="Logo" class="center" id="logo">
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <h2 style="margin-left: 10px;">Menu</h2>

                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>

                    <a href="dashboard.php" onclick="clickAndDisable(this);">Home</a>
                </li>

                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="users/drivers.php" onclick="clickAndDisable(this);">Drivers</a>
                </li>

                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="users/vehicles.php" onclick="clickAndDisable(this);">Vehicles</a>
                </li>
                 <li style="margin: 20px">
                  <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                  <a href="users/offenses.php" onclick="clickAndDisable(this);">Offenses Type</a>
              </li>

                <li style="margin: 20px">
                    <i class="nav-icon fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="reports/reports.php" onclick="clickAndDisable(this);">Reports</a>
                </li>
                <li style="margin: 20px">
                  <i class="fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                  <a href="users/users.php" onclick="clickAndDisable(this);"> Users</a>
              </li>
              <li style="margin: 20px">
                  <i class="fas fa-boxes" style="padding-left: 10px; padding-right: 10px"></i>
                  <a href="users/officers.php" onclick="clickAndDisable(this);">Officers</a>
              </li>


                <li style="margin: 20px">
                    <i class="fas fa-power-off" style="padding-left: 10px; padding-right: 10px"></i>
                    <a href="includes/logout.inc.php" onclick="clickAndDisable(this);">LOGOUT</a>
                </li>   

            </ul>
        </nav>
    </div>
</aside>

<script> 
   function clickAndDisable(link) {
     // disable subsequent clicks
     link.onclick = function(event) {
        event.preventDefault();
     }
   }   
</script>
