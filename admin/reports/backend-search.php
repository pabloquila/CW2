<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$link = mysqli_connect($servername, $username, $password, $dbname);

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM drivers WHERE national_id LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["national_id"] . "</p>";
                }
            } else{

                echo "  <form action='../dashboard.php' method='post' style=' padding: 5px;'>                         
                        <button class='btn btn-outline-success btn-sm'>No user found, click to create a new Driver</button>
                        </form>";                                           
            }


        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}

if(isset($_REQUEST["term2"])){
    // Prepare a select statement
    $sql = "SELECT * FROM drivers WHERE licence_number LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term2"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["licence_number"] . "</p>";
                }
            } else{

                echo "  <form action='../dashboard.php' method='post' style=' padding: 5px;'>                         
                        <button class='btn btn-outline-success btn-sm'>No user found, click to create a new Driver</button>
                        </form>";                                           
            }


        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}

if(isset($_REQUEST["term3"])){
    // Prepare a select statement
    $sql = "SELECT * FROM vehicles WHERE vehicle_id LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term3"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["vehicle_id"] . "</p>";
                }
            } else{

                echo "  <form action='../dashboard.php' method='post' style=' padding: 5px;'>                         
                        <button class='btn btn-outline-success btn-sm'>No user found, click to create a new Driver</button>
                        </form>";                                           
            }


        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
if(isset($_REQUEST["term4"])){
    // Prepare a select statement
    $sql = "SELECT * FROM offenses WHERE offense_code LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term4"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["offense_code"] . "</p>";
                }
            } else{

                echo "  <form action='../dashboard.php' method='post' style=' padding: 5px;'>                         
                        <button class='btn btn-outline-success btn-sm'>No user found, click to create a new Driver</button>
                        </form>";                                           
            }


        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
if(isset($_REQUEST["term5"])){
    // Prepare a select statement
    $sql = "SELECT * FROM officers WHERE officer_id LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term5"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["officer_id"] . "</p>";
                }
            } else{

                echo "  <form action='../dashboard.php' method='post' style=' padding: 5px;'>                         
                        <button class='btn btn-outline-success btn-sm'>No user found, click to create a new Driver</button>
                        </form>";                                           
            }


        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
?>