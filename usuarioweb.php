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
				<li class="bg-success">
					<div class="top-info">
						<a href="funcionarios/index.php">Funcionários</a>
						<small>da Empresa</small>
					</div>
					<a href="funcionarios/index.php"><i class="icon-user4"></i></a>
					<?php
						$queryFuncionario=mysqli_query($conecta, "SELECT COUNT(PKID) AS TotalUsers FROM funcionario");
						$resultFuncionario=mysqli_fetch_assoc($queryFuncionario);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultFuncionario['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="epi/cadastro/index.php">Casdatro</a>
						<small>de EPI's</small>
					</div>
					<a href="epi/cadastro/index.php"><i class="icon-tools"></i></a>
					<?php
						$queryEPI=mysqli_query($conecta, "SELECT COUNT(PKID) AS TotalUsers FROM epi");
						$resultEPI=mysqli_fetch_assoc($queryEPI);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultEPI['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="epi/cadastro/index.php">Estoque</a>
						<small>de EPI's</small>
					</div>
					<a href="epi/cadastro/index.php"><i class="icon-database"></i></a>
					<?php
						$queryEstoque=mysqli_query($conecta, "SELECT SUM(estoque) AS TotalUsers FROM epi");
						$resultEstoque=mysqli_fetch_assoc($queryEstoque);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultEstoque['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="epi/entrega/index.php">Entrega</a>
						<small>de EPI's</small>
					</div>
					<a href="epi/entrega/index.php"><i class="icon-cart2"></i></a>
					<?php
						$queryEntrega=mysqli_query($conecta, "SELECT COUNT(PKID) AS TotalUsers FROM epi_entrega");
						$resultEntrega=mysqli_fetch_assoc($queryEntrega);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultEntrega['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="epi/episDanificados/index.php">EPI's</a>
						<small>danificados</small>
					</div>
					<a href="epi/episDanificados/index.php"><i class="icon-warning"></i></a>
					<span class="bottom-info bg-danger" style="background: black !important">6 registros</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="profissao/index.php">Profissões</a>
						<small>cadastradas</small>
					</div>
					<a href="profissao/index.php"><i class="icon-vcard"></i></a>
					<?php
						$queryProfissao=mysqli_query($conecta, "SELECT COUNT(PKprofissao) AS TotalUsers FROM profissoes");
						$resultProfissao=mysqli_fetch_assoc($queryProfissao);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultProfissao['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
                                <?php if($_SESSION["acesso"] == "ADM" || $_SESSION["acesso"] == "TOTAL"){ ?>
                                <li class="bg-success">
					<div class="top-info">
						<a href="curso/index.php">Cursos</a>
						<small>cadastrados</small>
					</div>
					<a href="curso/index.php"><i class="icon-tv"></i></a>
					<?php
						$queryProfissao=mysqli_query($conecta, "SELECT COUNT(PKID) AS TotalUsers FROM curso");
						$resultProfissao=mysqli_fetch_assoc($queryProfissao);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultProfissao['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
                                <li class="bg-success">
					<div class="top-info">
						<a href="palestra/index.php">Palestras</a>
						<small>cadastrados</small>
					</div>
					<a href="palestra/index.php"><i class="icon-bubbles2"></i></a>
					<?php
						$queryProfissao=mysqli_query($conecta, "SELECT COUNT(PKID) AS TotalUsers FROM palestra");
						$resultProfissao=mysqli_fetch_assoc($queryProfissao);
					?>
					<span class="bottom-info bg-danger" style="background: black !important"><?php echo str_pad($resultProfissao['TotalUsers'], 3, 0, STR_PAD_LEFT)?> Registro(s)</span>
				</li>
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
                        <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-settings"></i> Pontuação</h6></div>
                <div class="panel-body">
    				<div class="row">
						<div class="col-md-6">
						<!-- Info blocks -->
			<?php 
                       
			$sqlPontos = mysqli_query($conecta,"SELECT * FROM criterios WHERE FKfuncionario = " . $_SESSION["id"]);
			if(mysqli_num_rows($sqlPontos) > 0) {
				$rsPonto = mysqli_fetch_assoc($sqlPontos);
				$assiduidade = $rsPonto["assiduidade"];
				$pontualidade = $rsPonto["pontualidade"];
				$epi = $rsPonto["epi"];
			} else {
				$assiduidade = 0;
				$pontualidade = 0;
				$epi = 0;
			}
	
	
			?>
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Assiduidade</a>
						<small></small>
					</div>
					<a href=""><i class="icon-watch"></i></a>
					<span class="bottom-info bg-danger"> <?php echo $assiduidade; ?> pontos</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="#">Pontualidade</a>
						<small></small>
					</div>
					<a href="#"><i class="icon-stopwatch"></i></a>
					<span class="bottom-info bg-primary"><?php echo $pontualidade; ?> pontos</span>
				</li>
				<li class="bg-danger">
					<div class="top-info">
						<a href="#">EPI's</a>
						<small></small>
					</div>
					<a href="#"><i class="icon-hammer"></i></a>
					<span class="bottom-info bg-primary"><?php echo $epi; ?> pontos</span>
				</li>
				
			</ul>
			<!-- /info blocks -->
							</div>
    					<div class="col-md-6">
							
        					
					<div class="well">
						<div class="progress block-inner">
							<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $assiduidade; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $assiduidade; ?>%;">
								<?php echo $assiduidade; ?>%
							</div>
						</div>
						
						<div class="progress block-inner">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $pontualidade; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pontualidade; ?>%;">
								<?php echo $pontualidade; ?>%
							</div>
						</div>
						
						<div class="progress block-inner">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $epi; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $epi; ?>%;">
								<?php echo $epi; ?>%
							</div>
						</div>

						
					</div>
    			</div>
    		</div>
		</div>
	</div>



	       <?php include('footer.php') ?>
 

		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>