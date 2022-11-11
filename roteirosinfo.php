<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<?php
          include ("administrativo/conexao.php");
          $buscaRoteiro=mysqli_query($conecta, "SELECT * FROM roteiro ORDER BY datainicio DESC LIMIT 4");
          while( $resultRoteiro=mysqli_fetch_assoc($buscaRoteiro)){
      ?>                       
                           
  <h4 class="title"><a href="roteiros.php?ref=<?php echo base64_encode($resultRoteiro['PKID']) ?>"></a></h4>
        
          <div class="column default-featured-column style-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <figure class="image-box"> 
                <img src="administrativo/roteiro/<?php echo $resultRoteiro['foto'] ?>"/></figure>
              <div class="content-box">
                <div class="skill">
                  <div class="row">
                    
                  </div>
                </div>


                <h3><a href="roteirosinfo.php?ref=<?php echo $resultRoteiro['PKID'] ?>"><?php echo $resultRoteiro['nome'] ?></a></h3>
                <p><?php echo $resultRoteiro['descricao'] ?></p>
                <a href="roteirosinfo.php" class="theme-btn btn-style-orange">Saiba Mais <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
            </article>
          </div>
        <?php } ?>
    
</body>
</html>