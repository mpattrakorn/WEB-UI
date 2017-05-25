<?php

	
	session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];


	$password = md5($password);


	require_once("mysql.php");

	$result = $mysqli->query("SELECT * FROM account WHERE username = '$username' ");

	if($result->num_rows > 0){

		$account = $result->fetch_assoc();

		if($password === $account["password"]){
			echo "<script>alert('sucessfully login');</script>";
			if($account["role"] === "admin"){
				echo "<script>location.href='../Admin.php'</script>";
			} else {
				echo "<script>location.href='../Monk.php'</script>";
			}
			$_SESSION["login_user"] = $username;
			session_write_close();
		}
		else{
			echo "<script>alert('username or password is incorrect1');</script>";
			echo "<script>location.href='../Login.php'</script>";
		}
	}else{
		echo "<script>alert('username or password is incorrect2');</script>";
		echo "<script>location.href='../Login.php'</script>";
	}


?>