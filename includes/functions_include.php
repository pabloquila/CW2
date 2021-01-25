<?php 

function user_already_exists($conn, $useruid) {
	$sql = "SELECT * FROM users WHERE  username=? ;";
	$stmt = mysqli_stmt_init($conn);	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header ("location: ../signup2.php?error=statementfailedselect");
		exit()	;	
	}
	// ss two strings
	mysqli_stmt_bind_param($stmt, "s", $useruid);
	mysqli_stmt_execute($stmt);
	$result_Data = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result_Data)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function loginuser($conn, $useruid, $pwd){
	$userExists = user_already_exists($conn, $useruid);

	//check  if that uwsername exists
	if ($userExists===false) {
		header ("location: ../login.php?error=no_username_found");
		exit();
	}

	//getting the password from db
	$pwdHashed = $userExists["user_pwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd==false) {
		header ("location: ../login.php?error=wrong_password");	
		exit();	
	}

	else if($checkPwd===true){
		session_start();
		$_SESSION["userid"] = $userExists["user_id"]; 
		$_SESSION["useruid"] = $userExists["username"]; 


		header ("location: ../index.php");
		exit();	


	}

}
