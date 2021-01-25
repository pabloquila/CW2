<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="static/pdf.css" />
    <script src="static/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>

<body>
    <?php
    include "../includes/dbh.include.php"; 
    $id = $_GET['id']; 
    $records = mysqli_query($conn,"select * from reports where report_id = '$id'");
    $data2 = mysqli_fetch_array($records); 
    ?>
    <div class="card" id="invoice">
        <div class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <i class="fas fa-search"></i>
                    <h1>REPORT</h1>

                    <div class="row" style="margin:10px;padding-top: 10px">  
                        <div class="col-lg-4" style="margin: 0px; ">
                            <div class="card card-secondary">                        
                                <div class="card-body" style="padding-bottom: 50px">
                                    <div class="form-group " style="margin-bottom: 40px" >
                                        <h5 style="margin-bottom: 10px;">Report ID</h5>
                                        <?php echo "<h5>". $data2['report_id'] . "</h5>" ?>
                                    </div> 

                                    <div class="form-group " style="margin-bottom: 40px" >
                                        <h5 style="margin-bottom: 10px;">Date of the report</h5>
                                        <?php echo "<h5>". $data2['date'] . "</h5>" ?>
                                    </div> 

                                    <div class="form-group" style="margin-bottom: 47px;">
                                        <h5 style="margin-bottom: 10px;">Time of the Report</h5>
                                        <?php echo "<h5>". $data2['time'] . "</h5>" ?>
                                    </div>
                                    
                                    <div class="form-group search-box">
                                        <h5 style="margin-bottom: 10px;">Location</h5>
                                        <?php echo "<h5>". $data2['location'] . "</h5>" ?>
                                    </div>                     
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4" style="margin:0px;">
                            <div class="card card-secondary">                           
                                <div class="card-body">                            
                                    <div class="form-group search-box search2" style="margin-left: 20px;margin-bottom: 50px">
                                        <h5 style="margin-bottom: 10px;">Licence Number</h5>
                                        <?php echo "<h5>". $data2['licence_number'] . "</h5>" ?>
                                    </div>                                    

                                    <div class="form-group search-box search3" style="margin-left: 20px;margin-bottom: 50px">
                                        <h5 style="margin-bottom: 10px;">Vehicle ID</h5>
                                        <?php echo "<h5>". $data2['vehicle_id'] . "</h5>" ?>
                                    </div>                                    

                                    <div class="form-group search-box search4" style="margin-left: 20px;margin-bottom: 50px">
                                        <h5 style="margin-bottom: 10px;">Offense ID</h5>
                                        <?php echo "<h5>". $data2['offense_code'] . "</h5>" ?>
                                    </div>
                                    <div class="form-group" style="margin-left: 20px;margin-bottom: 55px">
                                        <h5 style="margin-bottom: 10px;">Penalty Points </h5>
                                        <?php echo "<h5>". $data2['penalty_points'] . "</h5>" ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" style="margin:0px;">
                            <div class="card card-secondary">                           
                                <div class="card-body">
                                    <div class="form-group search-box" style="margin-bottom: 45px" >
                                        <h5 style="margin-bottom: 10px;"> Name</h5>
                                        <?php echo "<h5>". $data2['full_name'] . "</h5>" ?>
                                    </div> 
                                    <div class="form-group search-box search5" style="margin-bottom: 50px">
                                        <h5 style="margin-bottom: 10px;">Fine </h5>
                                        <?php echo "<h5>". $data2['fine_gbp'] . "</h5>" ?>
                                    </div> 
                                    <div class="form-group" style="margin-bottom: 50px">
                                        <h5 style="margin-bottom: 10px;">Officer ID</h5>
                                        <?php echo "<h5>". $data2['officer_id'] . "</h5>" ?>
                                    </div>

                                    <div class="form-group" >
                                        <h5 style="margin-bottom: 10px;">Statement</h5>
                                        <?php echo "<h5>". $data2['statement'] . "</h5>" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                    
                <button class="btn btn-primary" id="download"> Report</button>    

            </div>
        </div>
    </div>


</body>

</html>