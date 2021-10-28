<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Interna</title>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script type="text/JavaScript">
    document.addEventListener('DOMContentLoaded', function(){
          var elems = document.querySelectorAll('.carousel');
          var instances = M.Carousel.init(elems);
        })
    </script>
</head>

<body>
  <nav class="blue darken-3">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">
        <img src="../view/img/Blackvariant-Button-Ui-Requests-13-NBA.ico" width="65px" height="65px">
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <?php
          echo ("Bem-Vindo " . $_SESSION["nome"] . " " . $_SESSION["sobrenome"]);
          ?>
        </li>
        <?php
        $acesso = $_GET["acesso"];

        if ($acesso == 1) {
          include("../controller/menuAdm.php");
        } else if ($acesso == 2) {
          include("../controller/menuCaixa.php");
        } else {
          include("../controller/menuVendedor.php");
        }
        //   switch ($acesso) {
        //     case 1:
        //         include("../controller/menuAdm.php");
        //     case 2:
        //       include("../controller/menuCaixa.php");
        //     case 3:
        //       include("../controller/menuVendedor.php");
        // }          
        ?>
        <!-- <li>
              <a href="../controller/logOut.php">Sair</a>
            </li> -->
        <li>
          <a href="../controller/sair.php?token='.$token.'">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container" style="margin-top: 20px; max-width: 500px;">
    <div class="carousel carousel-slider">
      <a class="carousel-item" href="#one!">
        <img src="../view/img/ezy_watermark_12-07-2021_11-01-19am.webp"></a>
      <a class="carousel-item" href="#two!">
        <img src="../view/img/ezy_watermark_12-07-2021_11-01-21am.webp"></a>
      <a class="carousel-item" href="#three!">
        <img src="../view/img/james-allstar2021-gettyimages-1231588058.webp"></a>
    </div>

      <div class="row" style="margin-top: 20px;">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="../view/img/james-allstar2021-gettyimages-1231588058.webp">
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>    
  </div>
   
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large #4caf50 green" href="https://api.whatsapp.com/send/?phone=5535991902617&text=Ol&aacute Jefferson, vamos conversar!&app_absent=0" target="_blank">
      <i class="large material-icons fab fa-whatsapp"></i>
    </a>
  </div>


  <footer class="page-footer blue darken-3" style="margin-top: 15px;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>

</body>

</html>