<?php
ob_start();
include("conexao.php");

if(isset($_POST["txtUsername"]) and isset($_POST["txtPassword"])){
	
	$query= mysqli_query($conecta,"SELECT * FROM users WHERE email ='". trim($_POST["txtUsername"])."' AND password ='". trim($_POST["txtPassword"]). "' LIMIT 1");
	
	if(mysqli_num_rows($query) >= 1){
		
		session_start();
		
		$result = mysqli_fetch_assoc($query);
		
		$_SESSION["username"] = $result['name'];
		$_SESSION["is_admin"] = $result['is_admin'];
                $_SESSION['id']=$result['id'];
		
		header('location: index.php');
		exit;
	}else{
		header ('Location: userLogin.php?msg='. $msg . '&type='. $type);
		exit;
	}
}

session_unset();
session_destroy();
header('location: index.php');
exit;

?>