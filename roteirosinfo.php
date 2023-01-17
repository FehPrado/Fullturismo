<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>FullTurismo - info</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
  <link rel="stylesheet" href="css/et-line-font/et-line-font.css">

  <!-- Main Menu CSS -->
  <link rel="stylesheet" href="css/meanmenu.min.css">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <!-- Cubeportfolio -->
  <link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">

  <style>
    .card {

      background: white;
      padding: 10px;
      width: 616px;
      margin-left: 105px;
      border-radius: 60px 0px 0px 60px;
    }

    .img {
      width: 428px;
      margin-left: 489px;
      margin-top: -459px;
      border-radius: 0px 60px 60px 0px;
    }

    .cont {
      margin-left: 97px;
    }
  </style>
</head>

<body>


  <div id="Portfolio">
    <div class="cont ">

      <?php
      include("administrativo/conexao.php");
      $buscaRoteiro = mysqli_query($conecta, "SELECT * FROM itinerary WHERE id=" . base64_decode($_GET['ref']));
      // var_dump(($_GET['ref']));
      while ($resultRoteiro = mysqli_fetch_assoc($buscaRoteiro)) {
      ?>

        <div class="card">
          <div>
            <div>
              <h4>Nome do Roteiro</h4>
              <?php echo $resultRoteiro['name'] ?>
              <br>
            </div>
            <div>
              <h4>Descrição</h4>
              <?php echo $resultRoteiro['description'] ?>
              <br>
            </div>
            <div>
              <h4>Local</h4>
              <?php echo $resultRoteiro['place'] ?>
              <br>
            </div>
            <div>
              <h4>Data de inicio</h4>
              <?php echo $resultRoteiro['start_date'] ?>
              <br>
            </div>
            <div>
              <h4>Data Final</h4>
              <?php echo $resultRoteiro['end_date'] ?>
              <br>
            </div>
            <div>
              <h4>Valor</h4>
              <?php echo $resultRoteiro['price'] ?>
            </div>
          </div>
        </div>
        <img class=" img" src="administrativo/roteiro/<?php echo $resultRoteiro['photo'] ?>">


      <?php } ?>
    </div>
  </div>
  <?php include("footer.php") ?>

</body>

</html>