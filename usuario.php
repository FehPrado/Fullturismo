<?php 
include ('administrativo/conexao.php');
session_start();

if(!isset($_SESSION["users"])){
    header('Location: login/');
    exit;
}

$idusuarioweb=base64_decode($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pagina login </title>
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



<!-- Header -->
<?php include('headerusuario.php') ?>
<!-- END Header --> 



<!-- Feature - services -->

<div id="services" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Meus Roteiros</strong></h2>
      <hr>
 
    </div>
   
      
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <img src="img/cbp-loading.gif" alt="">
        <h4><strong>Adicionar um Roteiro</strong> </h4>
        <hr>
        <p>Adicione um roteiro pronto ou crie o seu. </p>
          <a href="roteiros.php"> <button  class="btn " type="submit" name="btnAdicionar">Adinicionar</button></a>
           <button class="btn " type="submit" name="btnCriar">criar</button>
      </div>
        
        
      <div class="col-md-3 col-sm-6 service"> <img src="img/cbp-loading.gif" alt="">
        <h4><strong>Adicionar um Roteiro</strong> </h4>
        <hr>
        <p>Adicione um roteiro pronto ou crie o seu. </p>
             <a href="roteiros.php"> <button  class="btn " type="submit" name="btnAdicionar">Adinicionar</button></a>
           <button class="btn " type="submit" name="btnCriar">criar</button>
      </div>
      <div class="col-md-3 col-sm-6 service"> <img src="img/cbp-loading.gif" alt="">
        <h4><strong>Adicionar um Roteiro</strong> </h4>
        <hr>
        <p>Adicione um roteiro pronto ou crie o seu. </p>
           <button class="btn " type="submit" name="btnAdicionar">Adinicionar</button>
           <button class="btn " type="submit" name="btnCriar">criar</button>
      </div>
      <div class="col-md-3 col-sm-6 service"> <img src="img/cbp-loading.gif" alt="">
        <h4><strong>Adicionar um Roteiro</strong> </h4>
        <hr>
        <p>Adicione um roteiro pronto ou crie o seu. </p>
           <button class="btn " type="submit" name="btnAdicionar">Adinicionar</button>
           <button class="btn " type="submit" name="btnCriar">criar</button>
      </div>
    </div>
  </div>
</div>

<!-- END Services--> 

<!-- Demo Heading -->



<!-- END Demo Heading --> 

<!-- Footer Start  -->

<?php include('footer.php') ?>

<!-- End Footer --> 

<!-- Copyright Start  -->


<!-- End Copyright --> 

<!-- Back to Top --> 
<a href="#" id="back-to-top" title="Back to top"><img src="img/top-arrow.png" alt=""></a> 

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

<!--contact js file--> 
<script src="js/contact_me.js"></script> 

<!--master slider--> 
<script src="master-slider/js/masterslider.min.js"></script> 

<!-- Easypiechart JS  --> 
<script src="js/easypiechart.js"></script> 

<!-- main js --> 
<script src="js/main.js"></script>

 </body>
</html>