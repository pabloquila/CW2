<!-- BODY -->
<body class="hold-transition sidebar-mini layout-fixed">

<!-- SIDEBAR -->
<?php require_once 'templates/sidebar.php'; ?>
    
<!-- BODYINSIDE -->
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">                    
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                <?php
                                if(isset($_SESSION["useruid"])){
                                    echo " Welcome " . $_SESSION["useruid"];
                                }
                                ?>                                 
                             </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">

               

                </div>
            </div>
        </div>
    </div>
    
    </body>
