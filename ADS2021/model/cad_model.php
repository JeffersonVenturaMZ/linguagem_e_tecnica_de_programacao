<?php
    include_once("conexao.php");

    $nome = mysqli_real_escape_string($conn, $_POST["Nome"]);
    $sobreNome = mysqli_real_escape_string($conn, $_POST["SobreNome"]);
    $usuario = mysqli_real_escape_string($conn, $_POST["Usuario"]);
    $senha = mysqli_real_escape_string($conn, $_POST["Senha"]);

    echo("$nome - $sobreNome - $usuario -  $senha");

    $query = "INSERT INTO tbPessoa(Nome, SobreNome, Usuario, Senha) VALUES ('$nome', '$sobreNome', '$usuario', $senha)";

    echo("<br><br>");
    echo ($query);

    if(!mysqli_query($conn, $query))
    {
        die("<br>Falha na Inserção dos Dados = $query -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    }

    $id = mysqli_insert_id($conn);
    echo("<br><br>id =  $id");

    $query2 = "INSERT INTO tbLogin(usuario, senha, id_tbPessoa) VALUES ('$usuario', $senha, $id)";

    if(!mysqli_query($conn, $query2))
    {
        die("<br>Falha na Inserção dos Dados = $query2 -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    }

    echo("<br><br>");
    echo ($query2);
    mysqli_close($conn);
?>