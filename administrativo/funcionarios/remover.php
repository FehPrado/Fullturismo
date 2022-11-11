<?php
 
$paginaAtiva= 'funcionarios';
$nivelTela=1;
session_start();

if(!isset($_SESSION['username'])){
	include('../verifica.php');
}

include("../conexao.php");
if(empty($_GET["PKID"])){
	header("location: ./");
	exit;
}
$query = mysqli_query($conecta,"DELETE FROM funcionario WHERE PKID = " . base64_decode($_GET["PKID"]));

if($query){
	$type = base64_encode("alert-success");
	$msg = base64_encode("Registro removido com sucesso!");
} else {
	$type = base64_encode("alert-danger");
	$msg = base64_encode("Falha ao tentar remover o registro!");
}
header("location: ./?type=" . $type . "&msg=" . $msg);
exit;

?>