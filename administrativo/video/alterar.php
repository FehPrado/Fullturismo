<?php

$paginaAtiva = 'videos';
$nivelTela=1;
session_start();

if(!isset($_SESSION['username'])){
	include('../verifica.php');
}

error_reporting(0);
include("../conexao.php");

//se clicar no botao enviar
if(isset($_POST['btnEnviar'])){
	
	if(base64_decode($_GET['ref'])=='NOVO') {
	
		//insert
		mysqli_query($conecta, 
		"INSERT INTO video 
		(titulo, url, restricao)	
		VALUES (
		'" . strtoupper(trim($_POST['txtTitulo'])) . "',
		'" . (trim($_POST['txtURL'])) . "',
		'" . trim($_POST['txtRestricao']) . "'
		)");
		
	} else {

		// update
		mysqli_query($conecta, 
		"UPDATE video SET
		Titulo = '" . strtoupper(trim($_POST['txtTitulo'])) . "' ,
		URL = '" . (trim($_POST['txtURL'])) . "' ,
		Restricao = '" . trim($_POST['txtRestricao']) . "' 
		WHERE PKID = " . $_POST["PKID"]);
		
	}
	
	$type = base64_encode("alert-success");
	$msg = base64_encode("O video foi salvo com sucesso!");

	header('Location: ./?type=' . $type . '&msg=' . $msg);
	exit;
	
}


if(!empty($_GET["PKID"])) {
	$select = mysqli_query($conecta, "SELECT * FROM video WHERE PKID = " . base64_decode($_GET["PKID"]));
	if(mysqli_num_rows($select) == 0) {
		$type = base64_encode("alert-danger");
		$msg = base64_encode("Nenhum video foi encontrado!");

		header('Location: ./?type=' . $type . '&msg=' . $msg);
		exit;
	} else {
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
<title>Cadastro de Vídeos</title>

<link href="../resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../resources/css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="../resources/css/styles.css" rel="stylesheet" type="text/css">
<link href="../resources/css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	
<!-- ESTILO CSS CUSTOM -->
<link href="../resources/css/custom.css" rel="stylesheet" type="text/css">
<!-- FIM ESTILO -->

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

	<?php include('../header.php') ?>
	
	<!-- Page container -->
 	<div class="page-container">

		<?php include('../sidebar.php') ?>

		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Página Inicial <small>Bem-vindo</small></h3>
				</div>

			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="../resources/index.html">Página Inicial</a></li>
					<li class="active">Vídeos</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

			</div>
			<!-- /breadcrumbs line -->

			<form name="cadUsuario" method="post">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-users2"></i> Usuários</h6></div>
	                <div class="panel-body">

						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Titulo do Vídeo:</label>
	                                <input value="<?php echo $result["titulo"]?>" type="text" name="txtTitulo" class="form-control" placeholder="Tutorial Office">
								</div>

								<div class="col-md-4">
									<label>URL:</label>
	                                <input value="<?php echo $result["url"]?>" type="text" name="txtURL" class="form-control"  placeholder="https://www.youtube.com/watch?v=oT3mCybbhf0&html5=true">
								</div>
								<div class="col-md-3">
									<label>Restrição</label>
                                     <input type="text" name="txtRestricao" class="form-control" value="PUBLICO" disabled >
                                                                          <input type="hidden" name="txtRestricao" class="form-control" value="PUBLICO">
                                    <!--<select name="txtRestricao" data-placeholder="Selecione..." class="select-full" tabindex="4">
                                        <option value=""></option>
                                        <option value="Publico" <?php echo $result["Restricao"] == 'PUBLICO' ? 'selected' : '';?>>Publico</option> -->
                                        
                                    </select>
								</div>

							</div>
						</div>

						

					
						<!--
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Imagem:</label>
									<input type="file" class="styled form-control">
									<span class="help-block">Arquivo permitidos: jpg ou png. Tamanho máximo de 2Mb</span>
								</div>
							</div>
						</div>
						-->
						<input type="hidden" name="PKID" value="<?php echo $result["PKID"]?>">
                        <div class="form-actions text-right">
                        	<a href='.' type="reset" value="Limpar" class="btn btn-danger">Voltar</a>
                        	<input type="submit" value="Enviar" class="btn btn-primary" name="btnEnviar">
                        </div>

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