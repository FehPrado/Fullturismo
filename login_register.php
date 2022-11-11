<?php

include ("administrativo/conexao.php");
ob_start();

if(isset($_POST['btnCadastro'])){
	if($_POST['txtSenha']==$_POST['txtSenhaConfirma']){
       
    
        if(empty($_POST['email'])){
            echo "<script>alert('Campo Email em branco');</script>";
        }

        $data = implode('-', array_reverse(explode('/', $_POST['txtNascimento'])));

        $query = mysqli_query($conecta, 
            "INSERT INTO usuarioweb
            (email, senha, nome, cpf, telefone, nascimento) 
            VALUES (
             '". trim($_POST['txtEmail']) ."',
             '". trim($_POST['txtSenha']) ."',
             '". strtoupper(trim($_POST['txtNome'])) ."',	
             '". strtoupper(trim($_POST['txtCPF'])) ."',	
             '". trim($_POST['txtTelefone']) ."',	
                     '". $data ."'    
                  )");



        if($query){
            echo "<script>alert('Você Realizou seu cadastro com sucesso!');</script>";														   
            header('Location: login_register.php');
            exit;
        } else {
            echo "<script>alert('Erro ao efetuar cadastro');</script>";
        }

    } else {
        
        echo "<script>alert('Erro ao efetuar cadastro');history.back(-1)</script>";

    }
    
	
 } 


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Main Menu CSS -->
<link rel="stylesheet" href="css/meanmenu.min.css">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/style.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="css/responsive.css">

</head>

<body>
<!--preloader start-->
<div id="preloader">
  <div id="loader"></div>
</div>
<!--preloader end-->  


<!-- Nav Bar-->

<?php include("header.php") ?>

<!-- END Nav Bar --> 
 
<!-- Header -->
<div id="home" class="bg-inner low-back-gradient-inner">
  <div class="text-con-inner low-back-up">
    <div class="container">
      <div class="row">
        <div class="lead col-lg-12 col-xm-12 text-center">
          <h1><span class="top-heading-inner">Login Register</span> </h1>
          <div class="list-o-i white">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END Header -->



<!-- Login  -->
<div class="login_register_area">
  <div class="container">
    <div class="row">
      <div class="log-in-r text-center">
        <div class="tab_one"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
              
            
            <li role="presentation" class="active"><a href="#t-one-first" aria-controls="t-one-first" role="tab" data-toggle="tab" aria-expanded="true">Login</a></li>
              
              
              
            <li role="presentation" class=""><a href="#t-one-second" aria-controls="t-one-second" role="tab" data-toggle="tab" aria-expanded="false">Cadastrar</a></li>

            <a href="administrativo/userLogin.php"><button>Administrativo</button></a>

          </ul>
          
            
<?php
ob_start();
include("administrativo/conexao.php");

 if(isset($_POST["txtEmailUser"])and isset($_POST["txtSenhaUser"])){
	 
	$query= mysqli_query($conecta,"SELECT * FROM usuarioweb WHERE email ='". trim($_POST["txtEmailUser"])."' AND senha ='". trim($_POST["txtSenhaUser"]). "' LIMIT 1");
	
	if(mysqli_num_rows($query) >= 1){
		session_start();
		
		$result = mysqli_fetch_assoc($query);
		$_SESSION["pkid"] = $result['PKID'];
		$_SESSION["usuario"] = $result['nome'];
		$_SESSION["tipo"]="funcionario";
		
		header('location: usuario.php?PKID='. base64_encode($result["PKID"]));
		exit;
	}
 }



?>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade active in" id="t-one-first">
              <div class="tab_login_register">
                <form class="login" name="frmlogin" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="txtEmailUser" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" name="txtSenhaUser" required>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-login" type="submit" name="btnLogin">Login</button>
                  </div>
                  <div class="login_social clearfix">
                    <ul class="clearfix">
                      
                    </ul>
                  </div>
                  <div class="form-group check_login">
               
                   

                    
                    <a href="#" class="pull-right"> Esqueceu a Senha?</a> 
                    <a href="administrativo/userLogin.php"> Administrativo</a></div>
                </form>
              </div>
            </div>
              
              
            <div class="tab-pane fade" id="t-one-second">
              <div class="tab_login_register">
                <form class="login" name="frmcadastro" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" name="txtNome" required>
                  </div>
                 <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control"  maxlength="8" placeholder="Nascimento" name="txtNascimento" required>
                  </div>
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control"  maxlength="11" placeholder="CPF" name="txtCPF" required>
                  </div>
                    <div class="form-group">
                    <input class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="11" placeholder="Telefone" name="txtTelefone" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="txtEmail" required>
                  </div>
                     <div class="form-group">
                    <input type="text" class="form-control" placeholder="Senha" name="txtSenha" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Confirme sua senha" name="txtSenhaConfirma" required>
                  </div>
                 
                  
                  <div class="form-group">
                    <input class="btn btn-login" type="submit" name="btnCadastro" value="Cadastrar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Login --> 




<!-- Footer Start  -->

<?php include('footer.php') ?>

<!-- End Copyright --> 

<!-- Back to Top -->
<a href="#" id="back-to-top" title="Back to top"><img src="img/top-arrow.png" alt=""> </a>  

<!-- js file  --> 
<script src="js/jquery-1.12.5.min.js"></script>  

<!-- Bootstrap JS  --> 
<script src="js/bootstrap.js"></script> 

<!-- load cubeportfolio  --> 
<script src="js/jquery-latest.min.js"></script> 
<script src="js/jquery.cubeportfolio.min.js"></script> 
<script src="js/main-portfolio.js"></script> 

<!-- Prettyphoto JS  --> 
<script src="js/jquery.prettyphoto.js"></script> 

<!-- Meanmenu Js --> 
<script src="js/jquery.meanmenu.min.js" ></script> 

<!-- OWL JS  --> 
<script src="js/owl.js"></script> 

<!--jqBootstrapValidation js file--> 
<script src="js/jqBootstrapValidation.js"></script> 

<!--contact js file
<script src="js/contact_me.js"></script> 
--> 
<!--master slider--> 
<script src="master-slider/js/masterslider.min.js"></script> 

<!-- Easypiechart JS  --> 
<script src="js/easypiechart.js"></script> 

<!-- main js --> 
<script src="js/main.js"></script>

 </body>
</html>