<?php 

if (isset($_POST["submit"])){

    $user_level = $_POST['user_level'];
    $useruid = $_POST['useruid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    
    require_once 'dbh.include.php';
    require_once 'functions.inc.php';


    
    if(pwdMatch( $pwd, $pwdrepeat) !== false ){
        header ("location: ../create.users.php?error=pwd_dont_match");
        exit();
    }
    if(uidExists($conn, $useruid) !== false ){
        header ("location: ../create.users.php?error=username_already_exists");
        exit();
    }


    createUser($conn, $user_level, $useruid, $pwd );


// FOR CREATING AN ADMIN ACCOUNT

    // createUser2($conn, $user_level, $useruid, $pwd );
}

else {
    header ("location: ../users.php");
    exit();
}