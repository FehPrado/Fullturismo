<?php
ob_start();
session_start();

if(isset($_SESSION["username"])){
	echo "<script>window.location='index.php';</script>";
	exit;
}else{
	if($nivelTela==0){
		header('location: userLogin.php');
		exit;
	}
	if($nivelTela==1){
		header('location: ../userLogin.php');
		exit;
	}
}


?>