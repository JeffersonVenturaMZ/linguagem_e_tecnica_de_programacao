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
                if($retornoDoSelect["usuario"] == $usuario && $retornoDoSelect["senha"] == $senha){
                    print_r($retornoDoSelect);
                    echo($retornoDoSelect["Id"]);
                    echo("Login Efetuado com Sucesso! Bem-Vindo!");

                    $_SESSION["login"] = $retornoDoSelect["Id"]; 
                    
                    $qry= "SELECT * FROM tbpessoa WHERE Id = ".$retornoDoSelect["id_tbPessoa"];

                    if($resultadoPessoa = mysqli_query($conn, $qry)){
                        $_SESSION['errologin']= "Usuário não encontrado na base";
                        header("location:../view/login.php");
                    }  
                    $retornoDoSelectPessoa = mysqli_fetch_assoc($resultadoPessoa);
                    $_SESSION["nome"] = $retornoDoSelectPessoa["Nome: "];
                    $_SESSION["sobrenome"] = $retornoDoSelectPessoa["Sobrenome: "];                    

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