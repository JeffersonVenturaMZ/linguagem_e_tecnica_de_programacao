<?php
    session_start();

    include_once("conexao.php");

    $usuario = mysqli_real_escape_string($conn, $_POST["Usuario"]);
    $senha = mysqli_real_escape_string($conn, $_POST["Senha"]);

    $query = "SELECT * FROM tblogin WHERE Usuario = '$usuario' and Senha = $senha";
    
    if($resultado = mysqli_query($conn, $query))
    {
        if(mysqli_num_rows($resultado) != 0){
            while($retornoDoSelect = mysqli_fetch_assoc($resultado))
            {
                // var_dump( $retornoDoSelect['usuario']);
                // die;
                
                if($retornoDoSelect["usuario"] == $usuario && $retornoDoSelect["senha"] == $senha){
                    print_r($retornoDoSelect);
                    echo($retornoDoSelect["Id"]);
                    echo("Login Efetuado com Sucesso! Bem-Vindo!!");

                    $_SESSION["login"] = $retornoDoSelect["Id"]; 
                   
                    header("location:../view/pgInterna.php?id=".$retornoDoSelect["Id"]);
                }
                else
                {
                    echo("deu ruim!");
                    header("location:../view/login.php");
                }

            }
            
        }
        else
        {
            $_SESSION["errologin"] = "Usuário ou Senha Inválido";
            header("location:../view/login.php");
        }
    }
    else
    {
        header("location:../view/login.php");
        die("<br>Falha na busca dos Dados = $query -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    }
?>