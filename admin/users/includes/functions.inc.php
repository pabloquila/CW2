<?php 

function pwdMatch($pwd, $pwdrepeat) {
	$result;
	if ($pwd != $pwdrepeat){
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;

}

function uidExists($conn, $useruid) {
	$sql = "SELECT * FROM users WHERE  username=? ;";
	// prepare statments 
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header ("location: ../users.php?error=statementfailedselect");
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
	$uidExists = uidExists($conn, $useruid);

	//check to kno if that uwsername exists

	if ($uidExists===false) {
		header ("location: ../login.php?error=wronglogin");
		exit();
	}

	//getting the passw
	$pwdHashed = $uidExists["user_pwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd==false) {
		header ("location: ../login.php?error=wronglogin_password");	
		exit();	
	}

	else if($checkPwd===true){
		session_start();
		$_SESSION["userid"] = $uidExists["user_id"]; 
		$_SESSION["useruid"] = $uidExists["username"]; 


		header ("location: ../index.php");
		exit();	


	}

}


function createUser($conn, $user_level, $useruid, $pwd) {
	$sql = "INSERT INTO users (username,user_pwd, user_level) VALUES (?,?,?);";
	// prepare statments 
	$stmt = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header ("location: ../create.users.php?error=statementfailedcreating");
		exit();		
	}

	// passowrd security
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	// ss two strings
	mysqli_stmt_bind_param($stmt, "sss", $useruid, $hashedPwd , $user_level);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);

	//send user to fron page or othe page

	header ("location: ../users.php?error=none");
		exit();

}


// FOR CREATING AN ADMIN ACCOUNT

// function createUser2($conn, $user_level, $useruid, $pwd) {
// 	$sql = "INSERT INTO admin (username,user_pwd, admin_id) VALUES (?,?,?);";
// 	// prepare statments 
// 	$stmt = mysqli_stmt_init($conn);
	
// 	if (!mysqli_stmt_prepare($stmt, $sql)) {
// 		header ("location: ../create.users.php?error=statementfailedcreating");
// 		exit();		
// 	}

// 	// passowrd security
// 	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

// 	// ss two strings
// 	mysqli_stmt_bind_param($stmt, "sss", $useruid, $hashedPwd , $user_level);
// 	mysqli_stmt_execute($stmt);

// 	mysqli_stmt_close($stmt);

// 	//send user to fron page or othe page

// 	header ("location: ../users.php?error=none");
// 		exit();

// }


