<?php

$paginaAtiva = 'eventos';
$nivelTela=1;
session_start();

if(!isset($_SESSION['username'])){
	include('../verifica.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>Info Eventos</title>

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
                    <h3>Eventos <small>Bem-vindo</small></h3>
                </div>

            </div>
            <!-- /page header -->

            <?php
			if(isset($_GET["type"]) and isset($_GET["msg"])) { ?>
            <div class="alert <?php echo base64_decode($_GET["type"]) ?> fade in block-inner">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="icon-checkmark-circle"></i> <?php echo base64_decode($_GET["msg"]) ?>
            </div>
            <?php } ?>

            <!-- Breadcrumbs line -->
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="../">Página Inicial</a></li>
                    <li class="active">Eventos</li>

                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>

            </div>
            <!-- /breadcrumbs line -->

            <div class="block">
                <h6 class="heading-hr"><i class="icon-grid"></i>Eventos</h6>
                <a href="../eventos/alterar.php?ref=<?php echo base64_encode('NOVO'); ?>" style="float:right; margin-top: -60px" class="btn btn-info"><i class="icon-plus"> </i> NOVO</a>
                <div class="tasks">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Nome do Evento</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Data Inicio</th>
                                <th class="text-center">Data Termino</th>
                                <th class="text-center">Dias</th>
                                <th class="text-center">Horario</th>
                                <th class="text-center">Preço</th>
                                <th class="text-center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								include('../conexao.php');
								$query = mysqli_query($conecta, "SELECT * FROM roteiro ORDER BY nome") or die(mysqli_error());
								if(mysqli_num_rows($query) >= 1) {
									while($result = mysqli_fetch_assoc($query)) {
							?>
                            <tr>
                                <td><?php echo $result['nome'] ?></td>
                                <td><?php echo $result['descricao'] ?></td>
                                <td><?php echo $result['datainicio'] ?></td>
                                <td><?php echo $result['datatermino'] ?></td>
                                <td><?php echo $result['dias'] ?></td>
                                <td><?php echo $result['horario'] ?></td>
                                <td><?php echo $result['preco'] ?></td>




                                <td class='text-center'>
                                    <div class='btn-group'>

                                        <ul>
                                            <li><a href="alterar.php?PKID=<?php echo base64_encode($result['PKID']) ?>"><i class='icon-remove'></i> Alterar</a></li>


                                        </ul>

                                        <li><a href='javascript:void(0)' onclick="if (confirm('Confirma exclusão do item?')) { location.href='remover.php?PKID=<?php echo base64_encode($result['PKID'])?>' }"><i class='icon-remove'></i> Remover</a></li>


                                    </div>
                                </td>

                            </tr>
                            <?php } ?>
                            <tr>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php include('../footer.php') ?>

        </div>
        <!-- /page content -->


    </div>
    <!-- /page container -->

</body>

</html>