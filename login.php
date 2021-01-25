<?php
    session_start();
    if(isset($_SESSION["useruid"])){
        header("Location: dashboard.php" );                          
    }                    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="static/lib/adminlte-3.0.4/plugins/font-awesome-5.11.1/css/all.min.css">
    <link rel="stylesheet" href="static/lib/adminlte-3.0.4/css/adminlte.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>


<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../index.php"><b>Sys</b>tem</a>
        </div>
        <div class="card-body login-card-body">
        <p class="login-box-msg">Login with your credentials </p>

        <form action="includes/login.inc.php" method="post">
            <div class="input-group mb-3">
                    <input type="text" name="login_user_id" placeholder="Username" class="form-control" required="" id="id_username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
            </div>      
            <div class="input-group mb-3">
                    <input type="password" name="login_user_pwd" placeholder="Password" class="form-control" required="" id="id_password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
            </div>
            <?php 
                if (isset($_GET["error"])) {
                    
                    if ($_GET["error"] == "no_username_found") {
                        echo '<script type="text/javascript" id="sweat">

                            swal({
                               title: " ",
                               text: "No username found",
                               type: "error"
                            });
                                
                            </script>';
                    }
                    if ($_GET["error"] == "wrong_password") {
                        echo '<script type="text/javascript" id="sweat">

                            swal({
                               title: " ",
                               text: "Wrong password",
                               type: "error"
                            });
                                
                            </script>';
                    }
                }
                ?>
             
                    <div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">
                            <i class="fas fa-sign-in-alt"></i> LOGIN
                        </button>
                         <a href="dashboard.php">                             
                         </a>
                    </div> 
                    <div>  
        </form>
    </div>
    <div >
        <a  href="admin/login.php">
    <button style="margin-top: 10px" type="submit" class="btn btn-primary btn-block" name="submit">
        <i class="fas fa-sign-in-alt"></i> LOGIN AS ADMINISTRATOR
    </button>
    </div>
    
    </a>
  
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<script src="static/lib/adminlte-3.0.4/plugins/jquery/jquery.min.js"></script> 
<script src="static/lib/adminlte-3.0.4/js/adminlte.min.js"></script>



</html>
