<?php

$paginaAtiva= 'Profissoes';
$nivelTela=1;
session_start();

if(!isset($_SESSION["username"])){
	include('../verifica.php');
}

include('../conexao.php');

if(empty($_GET["PKID"])) {
	header('Location: ./');
	exit;
}

$query = mysqli_query($conecta, 
"DELETE FROM profissoes where PKprofissao = " . base64_decode($_GET["PKID"])) ;


if($query){
$type = base64_encode("alert-success");
$msg = base64_encode("Registro removido com sucesso!");
	
}else{
	$type = base64_encode("alert-danger");
	$msg = base64_encode("Falha ao tentar encontrar o registro!");
}
header('Location: ./?type= ' . $type. '&msg=' . $msg );
		exit;

?>