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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
  </head>
  <body>
    <nav class="blue darken-3">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">
            <img src="../view/img/Blackvariant-Button-Ui-Requests-13-NBA.ico" width="65px" height="65px">
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <a href="#">Times</a>
          </li>
          <li>
            <a href="#">Jogadores</a>
          </li>
          <li>
            <a href="#">Configurações</a>
          </li>
          <li>
            <?php
                echo("Bem-Vindo ".$_SESSION["nome"]." ".$_SESSION["sobrenome"]);
            ?>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!">
                <img src="../view/img/ezy_watermark_12-07-2021_11-01-19am.webp"></a>
            <a class="carousel-item" href="#two!">
                <img src="../view/img/ezy_watermark_12-07-2021_11-01-21am.webp"></a>
            <a class="carousel-item" href="#three!">
                <img src="../view/img/james-allstar2021-gettyimages-1231588058.webp"></a>
        </div>            
    </div>

    <footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            var instance = M.Carousel.init({
                fullWidth: true
            });
        </script>
    </footer>
  </body>
</html>