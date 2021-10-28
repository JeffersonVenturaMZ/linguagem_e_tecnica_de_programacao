<?php
session_start();

include_once ("conexao.php");

$usuario = mysqli_real_escape_string($conn, $_POST["Usuario"]);
$senha = mysqli_real_escape_string($conn, $_POST["Senha"]);

$query = "SELECT * FROM tblogin WHERE usuario = '$usuario' and senha = $senha";

if ($resultado = mysqli_query($conn, $query))
{
    if (mysqli_num_rows($resultado) != 0)
    {
        while ($retornoDoSelect = mysqli_fetch_assoc($resultado))
        {
            if ($retornoDoSelect["usuario"] == $usuario && $retornoDoSelect["senha"] == $senha)
            {

                print_r($retornoDoSelect);
                echo ($retornoDoSelect["id"]);
                echo ("Login Efetuado com Sucesso! Bem-Vindo!");

                //Criação da sessão login com o dado id dentro dela
                $_SESSION["login"] = $retornoDoSelect["id"];

                //Trazer os dados da tbPessoa para mostrar na saudação
                $query2 = "SELECT * FROM tbpessoa WHERE id = " . $retornoDoSelect["id_tbPessoa"];
                $resultadoPessoa = mysqli_query($conn, $query2);
                // var_dump($resultadoPessoa);
                // die;
                if ($resultadoPessoa -> num_rows == 0)
                {
                    $_SESSION['errologin'] = "Usuário não encontrado na base";
                    header("location:../view/login.php");
                }
                else{
                    $retornoDoSelectPessoa = mysqli_fetch_assoc($resultadoPessoa);
                    // var_dump($retornoDoSelectPessoa["nome"]);
                    // die;
                    $_SESSION["nome"] = $retornoDoSelectPessoa["nome"];
                    $_SESSION["sobrenome"] = $retornoDoSelectPessoa["sobrenome"];

                    header("location:../view/pgInterna.php?id=" . $retornoDoSelect["id"]);
                }
            }
            else
            {
                echo ("deu ruim!");
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
    die("<br>Falha na busca dos Dados = $query -> " . mysqli_errno($conn) . " -> " . mysqli_error($conn));
}
?>
