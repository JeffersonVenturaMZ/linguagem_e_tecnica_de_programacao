<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdnome = "ads20212";

    $conn = mysqli_connect($servidor, $usuario, $senha, $bdnome);

    if(!$conn)
    {
        die("Falha na Conexão: ".mysqli_connect_errno()." -> ".mysqli_connect_error());
    }
    else
    {
        // echo("Conexão feita com sucesso");
    }
?>