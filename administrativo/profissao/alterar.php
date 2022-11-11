<?php

$paginaAtiva = 'profissoes';
$nivelTela=1;
session_start();

if(!isset($_SESSION['username'])){
	include('../verifica.php');
	
	//$_SESSION['nome']='Marcelo'; DECLARA VARIAVEL SESSAO(GLOBAL)
	//session_destroy();=> DESTROI SESSION E LIMPA AS VARIAVEIS
	
}
include('../conexao.php');

if(isset($_POST['btnEnviar'])){
	
	if(base64_decode($_GET['ref'])=='NOVO'){
		//insert
	
		
		mysqli_query($conecta,"INSERT INTO profissoes (nome) VALUES('". trim($_POST['txtNome'])."')");
		
	}else{
		//update
		mysqli_query($conecta,"UPDATE profissoes SET nome='". trim($_POST['txtNome'])."' WHERE PKprofissao=". base64_decode($_GET["PKID"]));	
	
	}
		
		$type = base64_encode("alert-success");
		$msg = base64_encode("O resgistro foi salvo com sucesso!");
		
		
		header('Location: ./?type=' . $type . '&msg=' . $msg);
		exit;

}
if(!empty($_GET["PKID"])){
	$select = mysqli_query($conecta, "SELECT * FROM profissoes where PKprofissao = " . base64_decode($_GET["PKID"]));
	if(mysqli_num_rows($select) == 0){
		$type = base64_encode("alert-danger");
		$msg = base64_encode("Nenhum registro foi encontrado!");
		
		header('Location: ./?type=' . $type . '&msg=' . $msg);
		exit;
		
	}else{
		$result = mysqli_fetch_assoc($select);
		
	}
	
}



?>








<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Cadastro de Profissões</title>

<link href="../resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../resources/css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="../resources/css/styles.css" rel="stylesheet" type="text/css">
<link href="../resources/css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	
	<link href="../resources/css/custom.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="../resources/js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="../resources/js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="../resources/js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="../resources/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="../resources/js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="../resources/js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="../resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../resources/js/application.js"></script>

</head>

<body>

	<?php include('../header.php')?>

	<!-- Page container -->
 	<div class="page-container">


	 <?php include('../sidebar.php')?>


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Nova Profissão<small></small></h3>
				</div>

				<div class="range">
					
				</div>
			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="../index.php">Página Inicial</a></li>
					<li><a href="index.php">Profissões</a></li>
					<li class="active">Novo</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

		
			</div>
			<!-- /breadcrumbs line -->


			<!-- Info blocks -->
			
			<!-- /info blocks -->




		<form name="cadUsuario" method="post">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-users"></i>Usuários</h6></div>
	                <div class="panel-body">

						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Nome da profissao:</label>
	                                <input value="<?php echo $result["nome"]?>" type="text" name="txtNome" class="form-control" placeholder="Coloque o nome da profissao">
								</div>
							
								
						
					<!--
					<div class="form-group">
								<div class="row">
									<div class="col-md-4">
								<label>Imagem:</label>
								<input type="file" class="styled form-control" id="report-screenshot">	
								<span class="help-block">Arquivos permitidos: jpg ou png. Tamanho máximo de 2Mb</span>
                        </div>
					</div>
					</div>
					-->
								
							<input type="hidden" name="FKprofissao" value="<?php echo $result["FKprofissao"]?>">
							

					</div>
					<div class="form-actions text-right ">
						<a href="index.php" class="btn btn-danger">Voltar</a>
						<input type="submit" value="Enviar" class="btn btn-primary" name="btnEnviar">
					</div>
				</div>
			</form>

	       <?php include('../footer.php') ?>
		
	</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>