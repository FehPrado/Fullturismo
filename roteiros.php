<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>FullTurismo - Roteiros</title>
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

<!-- Cubeportfolio -->
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
</head>

<body>
<!--preloader start-->
<div id="preloader">
  <div id="loader"></div>
</div>
<!--preloader end-->  

<!-- Nav Bar-->



<!-- END Nav Bar --> 

<!-- Header -->
<?php include("header.php") ?>
<!-- END Header -->

<!-- Pagenation -->

<!-- END Pagenation -->

<!-- Portfolio  -->
<div id="Portfolio"> 
     <!-- Container -->
     <div class="container">
          <div class="section-title center">
      <h2>Ultimos Lançamentos</h2>
      <hr>
   
    </div>
          
          <?php
          include ("administrativo/conexao.php");
              $buscaRoteiro=mysqli_query($conecta, "SELECT * FROM itinerary WHERE launch = 'YES' ");
              var_dump($buscaRoteiro);
                 while($resultRoteiro=mysqli_fetch_assoc($buscaRoteiro)){
         
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
                <p><?php echo $resultRoteiro['descriptrion'] ?></p>
                <a href="roteirosinfo.php?ref=<?php echo base64_encode($resultRoteiro['id']) ?>" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
            </article>
          </div>
        <?php } ?>
 
      
    </div>
  </div>

<!-- Portfolio-End  --> 
    
<!-- Portfolio2-start -->
    <div id="Portfolio"> 
     <!-- Container -->
     <div class="container">
          <div class="section-title center">
      <h2>Lançamentos Anteriores</h2>
      <hr>
      <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p>
    </div>
          
          <?php
          include ("administrativo/conexao.php");
              $buscaRoteiro=mysqli_query($conecta, "SELECT * FROM itinerary WHERE launch = 'NO' ");
                 while($resultRoteiro=mysqli_fetch_assoc($buscaRoteiro)){
         
      ?>   
         
                           
  <h4 class="title"><a href="roteiros.php?ref=<?php echo base64_encode($resultRoteiro['id']) ?>"></a></h4>
        
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
                <a href="roteirosinfo.php?ref=<?php echo base64_encode($resultRoteiro['id']) ?>" class="theme-btn btn-style-orange">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
            </article>
          </div>
        <?php } ?>
 
      
    </div>
  </div>




<!-- END Demo Heading --> 

<!-- Footer Start  -->

<?php include("footer.php")?>

<!-- End Footer --> 


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