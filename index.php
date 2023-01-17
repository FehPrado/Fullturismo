<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Full Turismo</title>
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

<!-- Main CSS -->
<link rel="stylesheet" href="css/main.css">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Prettyphoto-->
<link rel="stylesheet" href="css/prettyphoto.css">

<!--Master slider-->
<link href="master-slider/style/masterslider.css" rel="stylesheet">
<link href="master-slider/skins/default/style.css" rel="stylesheet">

<!-- OWL STYLE CSS -->
<link rel="stylesheet" type="text/css"  href="css/owl.css">

<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/style.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="css/responsive.css">

<!-- Cubeportfolio -->
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
</head>

<body>

<!-- Preloader start-->

<div id="preloader">
  <div id="loader"></div>
</div>

<!-- Preloader end--> 

<!-- Nav Bar-->

<?php include("header.php")?>

<!-- END Nav Bar --> 

<!-- Header -->

<div id="home" class="html-video full-height">
  <div class="home_overlay">
    <video class="text-center" muted="" autoplay="" loop=""> 
      
      <source type="video/mp4" src="video/video1.mp4">
     </video>
    <div class="video-text video-back">
      <h1 class="wow fadeInDown"> <span class="top-heading"> O Mundo <strong> <br>
        <span class="orange"><strong>Em um só clique</strong> </span></strong></span> </h1>
      <div class="white letter-s">Seus melhores momentos estão a um clice </div>
    </div>
  </div>
</div>

<!-- End-Header --> 
    


<div class="events-section latest-events">
  <div class="container">
    <div class="section-title center">
      <h2>Melhor <strong> Avaliação</strong></h2>
      <hr>
    </div>
    <div class="row clearfix"> 
      <!--Featured Column-->
        <?php
          include ("administrativo/conexao.php");
          $buscaRoteiro=mysqli_query($conecta, "SELECT * FROM itinerary ORDER BY start_date DESC LIMIT 4");
          while( $resultRoteiro=mysqli_fetch_assoc($buscaRoteiro)){
      ?>                       
                           

        
          <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <figure class="image-box"> 
                <img src="administrativo/roteiro/<?php echo $resultRoteiro['photo'] ?>"/></figure>
              <div class="content-box">
                <div class="skill">
                  <div class="row">
                    
                  </div>
                </div>


                <h3><a href="roteirosinfo.php?ref=<?php echo base64_encode($resultRoteiro['id']) ?>"><?php echo $resultRoteiro['name'] ?></a></h3>
                <p><?php echo $resultRoteiro['description'] ?></p>
                <a href="roteirosinfo.php?ref=<?php echo base64_encode($resultRoteiro['id']) ?>" class="theme-btn btn-style-orange">Saiba Mais <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
            </article>
          </div>
        <?php } ?>
 
      
    </div>
  </div>
</div>

<!-- Footer Start  -->
    <?php include("footer.php") ?>
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
<script src="js/jquery.meanmenu.min.js"></script> 

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
