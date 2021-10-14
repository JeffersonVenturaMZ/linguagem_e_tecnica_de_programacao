<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="shortcut icon" href="img/login.png" type="image/x-icon">
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user-o"></span></div>
              <h3 class="text-center mb-4">LogIn</h3>
              <form action="../model/login_model.php" class="form-signin" method="post">
                <div class="form-group"><input type="text" id="Usuario" name="Usuario" class="form-control rounded-left" placeholder="Usuário" required></div>
                <div class="form-group d-flex"><input type="password" id="Senha" name="Senha" class="form-control rounded-left" placeholder="Senha" required></div>
                <div class="form-group"><button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button></div>
                <div class="form-group d-md-flex ">
                  <div class="w-50"><a href="cadastro.php">Cadastre-se</a></div>
                </div> <?php
                        if(isset($_SESSION['errologin'])):
                        ?><div class="alert alert-danger" role="alert">
                  <p class="p-msg">ERRO: Usuário ou senha inválidos.</p>
                </div> <?php
                        endif;
                        unset($_SESSION['errologin']);
                        ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>