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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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

      <select name="pais" id="paises" style="display: inline-block;">
      </select>

      <input class="form-control btn btn-primary rounded submit px-3" style="margin-top: 10px;" type="submit" value="Cadastrar">
    </form>
  </body>
  <footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </footer>
</html>

<script>
  $(document).ready(function() {
    $.ajax({
      method: "GET",
      url: "https://servicodados.ibge.gov.br/api/v1/paises/"
    }).done(function(paises) {      
      
      $.each(paises, function(key,pais){
          $('#paises').append('<option value="'+pais.nome.abreviado+'">'+pais.nome.abreviado+'</option>');
      })
    }).fail(function() {
      alert("uh oh it failed");
    })
  });
</script>