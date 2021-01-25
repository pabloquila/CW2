<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TRACKING SYSTEM</title>

<!--   <- Google Fonts -->
  <link href="static/css/css.css" rel="stylesheet">        
  <!--====== Bootstrap CSS ======-->
  <link rel="stylesheet" href= "static/css/bootstrap.min.css">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="static/css/style_home.css" >
</head>

<body>
<header id="header" class="fixed-top header-transparent">
  <div class="row justify-content-center">
    <div class="col-xl-11 d-flex align-items-center">
        <a class="logo mr-auto"><img src="static/img/logo.jpg" alt="logo" ></a>
        <nav class="nav-menu d-none d-lg-block">
            <ul>                       

                <?php
                if(isset($_SESSION["useruid"])){

                    echo  "<div class='row'>";
                    echo  "<div class='colum' style='padding-right:20px;'><a href='dashboard.php'> SYTEMS </a></div> "; 
                    echo  "<div class='colum'><a href='includes/logout.inc.php'> LOGOUT  </a> </div>";
                    echo" </div>";                   
                }
                else {
                    echo "<li><a href='login.php'> LOGIN  </a></li>";
                }
                ?> 
            </ul>
        </nav>
    </div>
  </div>
</header>


<section id="home" class="slider_area">        
    <div id="carouselThree" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">                                                                
                                <h class="title"> Tracking System </h1>
                                </p>
                            </div>
                        </div>
                    </div> 
                </div> 
                <div style="margin-top:50px;" class="slider-image-box d-none d-lg-flex align-items-end">
                    <div class="slider-image">
                        <img src="static/img/1.png" alt="Hero">
                    </div> 
                </div> 
            </div> 
        </div>
    </div>        
</section>
</body>

</html>

