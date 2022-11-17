<?php 

$paginaAtiva = 'home';
$nivelTela=0;
session_start();

if(!isset($_SESSION['username'])){
	include('verifica.php');
}

//$_SESSION['nome']='Gabriel'; Declara variavel sessao (GLOBAL)
//session_destroy(); quebra a sessao
include('conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Painel Administrativo</title>

<link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="resources/css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="resources/css/styles.css" rel="stylesheet" type="text/css">
<link href="resources/css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	
	<link href="resources/css/custom.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="resources/js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="resources/js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="resources/js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="resources/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="resources/js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="resources/js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="resources/js/application.js"></script>

</head>

<body>

	<?php include("header.php") ?>


	<!-- Page container -->
 	<div class="page-container">


	<?php include('sidebar.php') ?>	


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Página Principal <small>Bem-Vindo</small></h3>
				</div>

				<div class="range">
                                
                               
					
				</div>
			</div>
			<!-- /page header -->

			<!-- Breadcrumbs line -->
                        
                        
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Página Inicial</a></li>
					<li class="active"></li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
				
			</div>
			<!-- /breadcrumbs line -->
                        
                        

			<!-- Info blocks -->
			<ul class="info-blocks">
				<li class="bg-success">
					<div class="top-info">
						<a href="usuarios/index.php">Usuários</a>
						<small>Cadastrados</small>
					</div>
					<a href="usuarios/index.php"><i class="icon-user2"></i></a>
					<?php
						$queryUsuarios=mysqli_query($conecta, "SELECT COUNT(id) AS TotalUsers FROM users");
						$resultUsuarios=mysqli_fetch_assoc($queryUsuarios);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultUsuarios['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
				
				
				
				
			
                                <?php if($_SESSION["is_admin"] == "1" || $_SESSION["is_admin"] == "TOTAL"){ ?>
                
                              <li class="bg-success">
					<div class="top-info">
						<a href="roteiro/index.php">Roteiros</a>
						<small>cadastrados</small>
					</div>
					<a href="roteiro/index.php"><i class="icon-balloon"></i></a>
					<?php
						$queryProfissao=mysqli_query($conecta, "SELECT COUNT(id) AS TotalUsers FROM itinerary");
						$resultProfissao=mysqli_fetch_assoc($queryProfissao);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultProfissao['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
                                <?php } ?>
			</ul>
			<!-- /info blocks -->
                        



	       <?php include('footer.php') ?>
 

		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>