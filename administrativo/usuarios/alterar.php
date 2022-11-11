<?php
$paginaAtiva= 'usuarios';
$nivelTela=1;
session_start();
error_reporting(0);
include('../conexao.php');
//se clicar no botao enviar
if(isset($_POST['btnEnviar'])){
	
	if(base64_decode ($_GET['ref'])=='NOVO'){
		//insert
		 
		mysqli_query($conecta, 
		"INSERT INTO usuario 
		(nome,cpf,email,sexo,nascimento,acesso,senha,endereco,bairro,cidade,estado) 
		VALUES (
		 '". strtoupper(trim($_POST['txtNome'])) ."',
		 '". strtoupper(trim($_POST['txtCPF'])) ."',
		 '". trim($_POST['txtEmail']) ."',	
		 '". trim($_POST['txtSexo']) ."',	
		 '". trim($_POST['txtNascimento']) ."',	
		 '". trim($_POST['txtAcesso']) ."',	
		 '". trim($_POST['txtSenha']) ."',	
		 '". strtoupper(trim($_POST['txtEndereco'])) ."',	
		 '". strtoupper(trim($_POST['txtBairro'])) ."',	
		 '". strtoupper(trim($_POST['txtCidade'])) ."',	
		 '". strtoupper(trim($_POST['txtEstado'])) ."'		
	     )"); 																 
																   
		header('location:index.php');
		exit;
	
	}else{
		//update
	mysqli_query($conecta, 
		"UPDATE usuario SET
		nome = '" . strtoupper(trim($_POST['txtNome'])) . "' ,
		cpf = '" . strtoupper(trim($_POST['txtCPF'])) . "' ,
		email = '" . trim($_POST['txtEmail']) . "' , 
		sexo = '" . trim($_POST['txtSexo']) . "' ,
		nascimento = '" . trim($_POST['txtNascimento']) . "' , 
		acesso = '" . trim($_POST['txtAcesso']) . "' , 
		senha = '" . trim($_POST['txtSenha']) . "' , 
		endereco = '" . strtoupper(trim($_POST['txtEndereco'])) . "',
		bairro = '" . strtoupper(trim($_POST['txtBairro'])) . "' ,
		cidade = '" . strtoupper(trim($_POST['txtCidade'])) . "' ,
		estado = '" . strtoupper(trim($_POST['txtEstado'])) . "'
		WHERE PKID = " . $_POST["PKID"]);
		
	
	}
	
	$type = base64_encode("alert-success");
	$msg = base64_encode("O registro foi salvo com sucesso!");

	header('Location: ./?type=' . $type . '&msg=' . $msg);
	exit;

}

if(!empty($_GET["PKID"])){
	$select = mysqli_query($conecta, "SELECT * FROM usuario WHERE PKID=". base64_decode($_GET["PKID"]));
	if(mysqli_num_rows($select)==0){
		$type = base64_encode("alert-danger");
		$msg = base64_encode("Nenhum resgistro encontrado!");
		
		header('location: ./?type'. $type . '&msg='. $msg);
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
<title>Cadastro de Usuários</title>

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

	<?php include("../header.php") ?>


	<!-- Page container -->
 	<div class="page-container">


	<?php include('../sidebar.php') ?>	


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Novo Usuário</h3>
				</div>

				<div class="range">
					
				</div>
			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="../index.php">Página Inicial</a></li>
					<li><a href="index.php">Usuários</a></li>
					<li class="active">Novo</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				
			</div>
			<!-- /breadcrumbs line -->


			<form name="cadUsuario" method="post">
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-users2"></i> Usuário</h6></div>
	                <div class="panel-body">

						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Nome Completo:</label>
	                                <input value="<?php echo $result["nome"]?>" type="text" name="txtNome" class="form-control" placeholder="José da Conceção ">
								</div>
								
								<div class="col-md-4">
									<label>CPF:</label>
	                                <input value="<?php echo $result["cpf"]?>" type="text" name="txtCPF" class="form-control" data-mask="999.999.999-99" placeholder="XXX.XXX.XXX-XX">
								</div>

								<div class="col-md-4">
									<label>Email:</label>
	                                <input value="<?php echo $result["email"]?>" type="text" name="txtEmail" class="form-control" placeholder="SeuEmail@email.com.br">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label>Sexo:</label>
                                    <select name="txtSexo" data-placeholder="Selecione..." class="select-full" tabindex="2">
                                        <option value=""></option> 
										<option value="masculino"<?php echo $result["sexo"] == "masculino" ? "selected" : "";?>>Masculino</option> 
                                        <option value="feminino"<?php echo $result["sexo"] == "feminino" ? "selected" : "";?>>Feminino</option> 
                                        <option value="outro"<?php echo $result["sexo"] == "outro" ? "selected" : "";?> >Outro</option> 
                                    </select>
								</div>

								<div class="col-md-3">
									<label>Data de Nascimento:</label>
                                    <input value="<?php echo $result["nascimento"]?>" name="txtNascimento" type="date" class="form-control">
                                    </select>
								</div>
							
								<div class="col-md-3">
									<label>Nível de Acesso:</label>
                                    <select name="txtAcesso" data-placeholder="Selecione..." class="select-full" tabindex="2">
								<option value=""></option> 
								<option value="TOTAL" <?php echo $result["acesso"] == "TOTAL" ? "selected" : "";?>>TOTAL</option> 
								<option value="RESTRITO" <?php echo $result["acesso"] == "RESTRITO" ? "selected" : "";?>>RESTRITO</option> 
                                                               ]
                                    </select>
								</div>
								
								<div class="col-md-3">
									<label>Senha:</label>
	                                <input name="txtSenha" type="password" class="form-control" placeholder="SENHA">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Endereço:</label>
                                    <input value="<?php echo $result["endereco"]?>" name="txtEndereco" type="text" class="styled form-control" placeholder="Avenida Dom Pedro I, 500">
								</div>

								<div class="col-md-6">
									<label>Bairro:</label>
                                    <input value="<?php echo $result["bairro"]?>" name="txtBairro" type="text" class="styled form-control" placeholder="Jardim das Nações">  
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Cidade:</label>
                                    <input value="<?php echo $result["cidade"]?>" name="txtCidade" type="text" class="styled form-control" placeholder="São Paulo">
								</div>

								<div class="col-md-6">
									<label>Estado:</label>
									<select value="<?php echo $result["estado"]?>" name="txtEstado" data-placeholder="Selecione..." class="select-full">
									<option value=""></option>
									<option value="AC" <?php echo $result["estado"] == "AC" ? "selected" : "";?>>AC</option>
									<option value="AL" <?php echo $result["estado"] == "AL" ? "selected" : "";?>>AL</option>
									<option value="AM" <?php echo $result["estado"] == "AM" ? "selected" : "";?>>AM</option>
									<option value="AP" <?php echo $result["estado"] == "AP" ? "selected" : "";?>>AP</option>
									<option value="BA" <?php echo $result["estado"] == "BA" ? "selected" : "";?>>BA</option>
									<option value="CE" <?php echo $result["estado"] == "CE" ? "selected" : "";?>>CE</option>
									<option value="DF" <?php echo $result["estado"] == "DF" ? "selected" : "";?>>DF</option>
									<option value="ES" <?php echo $result["estado"] == "ES" ? "selected" : "";?>>ES</option>
									<option value="GO" <?php echo $result["estado"] == "GO" ? "selected" : "";?>>GO</option>
									<option value="MA" <?php echo $result["estado"] == "MA" ? "selected" : "";?>>MA</option>
									<option value="MG" <?php echo $result["estado"] == "MG" ? "selected" : "";?>>MG</option>
									<option value="MT" <?php echo $result["estado"] == "MT" ? "selected" : "";?>>MT</option>
									<option value="MS" <?php echo $result["estado"] == "MS" ? "selected" : "";?>>MS</option>
									<option value="PA" <?php echo $result["estado"] == "PA" ? "selected" : "";?>>PA</option>
									<option value="PB" <?php echo $result["estado"] == "PB" ? "selected" : "";?>>PB</option>
									<option value="PI" <?php echo $result["estado"] == "PI" ? "selected" : "";?>>PI</option>
									<option value="PR" <?php echo $result["estado"] == "PR" ? "selected" : "";?>>PR</option>
									<option value="RJ" <?php echo $result["estado"] == "RJ" ? "selected" : "";?>>RJ</option>
									<option value="RN" <?php echo $result["estado"] == "RN" ? "selected" : "";?>>RN</option>
									<option value="RO" <?php echo $result["estado"] == "RO" ? "selected" : "";?>>RO</option>
									<option value="RR" <?php echo $result["estado"] == "RR" ? "selected" : "";?>>RR</option>
									<option value="RO" <?php echo $result["estado"] == "RO" ? "selected" : "";?>>RO</option>
									<option value="RS" <?php echo $result["estado"] == "RS" ? "selected" : "";?>>RS</option>
									<option value="SC" <?php echo $result["estado"] == "SC" ? "selected" : "";?>>SC</option>
									<option value="SE" <?php echo $result["estado"] == "SE" ? "selected" : "";?>>SE</option>
									<option value="SP" <?php echo $result["estado"] == "SP" ? "selected" : "";?>>SP</option>
									<option value="TO" <?php echo $result["estado"] == "TO" ? "selected" : "";?>>TO</option>
                                    </select>
								</div>
							</div>
						</div>
						
					<!--
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Imagem:</label>
                            		<input type="text" class="styled form-control">
									<span class="help-block">Arquivos permitidos: jpg ou png. Tamanho máximo 2Mb</span>
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