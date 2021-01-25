<?php
require_once 'dbh.include.php';	
require_once 'functions_include.php';

if (isset($_POST["submit"])) {
	$useruid = $_POST["login_user_id"];
	$pwd = $_POST["login_user_pwd"];

	loginuser($conn, $useruid, $pwd);
}

else {
	header("location: ../login.php");
	exit();
} 