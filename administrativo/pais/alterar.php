<?php

$paginaAtiva = 'pais';
$nivelTela=1;
session_start();

if(!isset($_SESSION['username'])){
	include('../verifica.php');
}

error_reporting(0);
include("../conexao.php");

//se clicar no botao enviar
if(isset($_POST['btnEnviar'])){
    
    if($_FILES["txtfoto"]["size"] > 0) {
        $extensaoArquivo = end(explode('.',$_FILES["txtfoto"]["name"]));
        $nomeArquivo = "fotos/".sha1(time().$_FILES["txtfoto"]["name"]).".".$extensaoArquivo;
        
        move_uploaded_file($_FILES["txtfoto"]["tmp_name"],$nomeArquivo);
        
    } else {
        $nomeArquivo = $_POST["fotoAntiga"];
    }
    
	if(base64_decode($_GET['ref'])=='NOVO') {
        
        if($_POST['txtlancamento']=="on") { 
          $lancamento="SIM";
        } else {
          $lancamento="NAO"; 
        }
                
		//insert
		mysqli_query($conecta, 
		"INSERT INTO pais 
		(nome,descricao, foto, avaliacao, lancamento)	
		VALUES (
		'" . strtoupper(trim($_POST['txtnome'])) . "',
		'" . (trim($_POST['txtdescricao'])) . "',
        '" . (trim($nomeArquivo)) . "',
        '" . (trim($_POST['txtavaliacao'])) . "'
        '" . (trim($lancamento)) . "'
		)");
		
	} else {

        if($_POST['txtlancamento']=="on") { 
          $lancamento="SIM";
        } else {
          $lancamento="NAO"; 
        }
		// update
		mysqli_query($conecta, 
		"UPDATE pais SET
		nome = '" . strtoupper(trim($_POST['txtnome'])) . "' ,
		descricao = '" . (trim($_POST['txtdescricao'])) . "' ,
        foto = '" . (trim($nomeArquivo)) . "' ,
        avaliacao = '" . (trim($_POST['txtavaliacao'])) . "' ,
        lancamento= '" . (trim($lancamento)) . "'
		WHERE PKID = " . $_POST["PKID"]);
		
	}
	
	$type = base64_encode("alert-success");
	$msg = base64_encode("O roteiro foi salvo com sucesso!");

	header('Location: ./?type=' . $type . '&msg=' . $msg);
	exit;
	
}


if(!empty($_GET["PKID"])) {
	$select = mysqli_query($conecta, "SELECT * FROM pais WHERE PKID = " . base64_decode($_GET["PKID"]));
	if(mysqli_num_rows($select) == 0) {
		$type = base64_encode("alert-danger");
		$msg = base64_encode("Nenhum roteiro foi encontrado!");

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
    <title>Cadastro de Eventos</title>

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
                    <li><a href="../resources/index.php">Página Inicial</a></li>
                    <li class="active">Eventos</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>

            </div>
            <!-- /breadcrumbs line -->

            <form name="cadUsuario" method="post" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title"><i class="icon-users2"></i> Eventos</h6>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">


                            <div class="col-md-6">
                                <label>Nome do País:</label>
                                <input value="<?php echo $result["nome"]?>" type="text" name="txtnome" class="form-control" placeholder="Titulo">
                            </div>



                            <div class="col-md-2">
                                <label>Lançamento:</label>
                                <input type="checkbox" name="txtlancamento" class="form-control" style="width:20px">
                            </div>
                            <div class="col-md-6">
                                <label>Avaliaçaõ:</label>
                                <textarea type="text" name="txtavaliacao" class="form-control" rows="4" placeholder="Detalhes"><?php echo $result["avaliacao"]?></textarea>
                            </div>




                            <div class="col-md-6">
                                <label>Descrição:</label>
                                <textarea type="text" name="txtdescricao" class="form-control" rows="4" placeholder="Detalhes"><?php echo $result["descricao"]?></textarea>
                            </div>



                            <div class="col-md-6">
                                <label>Foto</label>
                                <input type="file" name="txtfoto" class="form-control">
                                <input type="hidden" name="fotoAntiga" value="<?php echo $result["foto"]?>" class="form-control">
                            </div>





                            <input type="hidden" name="PKID" value="<?php echo $result["PKID"]?>">

                        </div>
                        <br><br><br>
                        <div class="text-right" style="margin-top: 100px">
                            <br><br>
                            <a href='.' type="reset" value="Limpar" class="btn btn-danger">Voltar</a>
                            <input type="submit" value="Enviar" class="btn btn-primary" name="btnEnviar">
                        </div>
                    </div>

                </div>

            </form>

            <?php include('../footer.php') ?>


            <!-- /page content -->


        </div>
        <!-- /page container -->

</body>

</html>