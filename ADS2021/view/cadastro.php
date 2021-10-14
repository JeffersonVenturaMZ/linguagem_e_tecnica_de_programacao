<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Site para promoção pessoal de trabalho">
        <meta name="keywords" content="portifólio; trabalho; busca por emprego; promoção individual; melhore sua imagem na internet">
        <meta name="author" content="Sidney">
        <link rel="stylesheet" href="css/style.css">

        <link rel="shortcut icon" href="img/death_star.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="container">
    <form action="../model/cad_model.php" method="post">
        <label for="Nome">Nome:</label>
        <input type="text" id="Nome" name="Nome">
        <label for="SobreNome">Sobre Nome:</label>
        <input type="text" id="SobreNome" name="SobreNome">
        <label for="Usuario">Usuario:</label>
        <input type="text" id="Usuario" name="Usuario">
        <label for="Senha">Senha:</label>
        <input type="password" id="Senha" name="Senha" required>
        <label for="pais">País:</label>
        <select name="pais" id="pais" style="display: inline-block;">
            <option value="" selected disabled></option>
            <?php
                include_once("../model/conexao.php");
                $sql = "SELECT * FROM pais ORDER BY nome";
                $retorno = mysqli_query($conn, $sql);
                while($linha = mysqli_fetch_assoc($retorno))
                {
                    echo
                    ('
                        <option value="'.$linha["sigla"].'">'.$linha["nome"].'</option>
                    ');
                }
            ?>
        </select>
        <input class="form-control btn btn-primary rounded submit px-3" style="margin-top: 10px;" type="submit" value="Cadastrar">
    </form>
</body>
</html>