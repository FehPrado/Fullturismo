<?php
ob_start();
include("conexao.php");

if(isset($_POST["txtUsername"]) and isset($_POST["txtPassword"])){
	
	$query= mysqli_query($conecta,"SELECT * FROM usuario WHERE email ='". trim($_POST["txtUsername"])."' AND senha ='". trim($_POST["txtPassword"]). "' LIMIT 1");
	
	if(mysqli_num_rows($query) >= 1){
		
		session_start();
		
		$result = mysqli_fetch_assoc($query);
		
		$_SESSION["username"] = $result['nome'];
		$_SESSION["acesso"] = $result['acesso'];
                $_SESSION['id']=$result['PKID'];
		
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