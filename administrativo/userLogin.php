<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Painel Administrativo</title>

<link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="resources/css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="resources/css/styles.css" rel="stylesheet" type="text/css">
<link href="resources/css/custom.css" rel="stylesheet" type="text/css">
<link href="resources/css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

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

<body class="full-width page-condensed"  >
    
    

		 
 	<?php
	include("headerLogin.php");
	?>
    
    
	

	<!-- Login wrapper -->
    
	<div class="login-wrapper">
    	<form action="autentica.php" method="post">
			<div class="popup-header">
				<span class="text-semibold">Acesso ao painel Administrativo</span>
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Usuário</label>
					<input name="txtUsername" type="text" class="form-control" placeholder="Login">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Senha</label>
					<input name="txtPassword" type="password" class="form-control" placeholder="Senha">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Acessar</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->


    <!-- Footer -->
    
       <?php include ("footer.php");?>
    		
   
    <!-- /footer -->


</body>
</html>