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

</head>
<body>
    <h1>Essa é a página interna do site</h1>
    <?php
        echo($_SESSION["login"]);
        echo("<br><br> Get:".$_GET["id"]);
    ?>
</body>
</html>