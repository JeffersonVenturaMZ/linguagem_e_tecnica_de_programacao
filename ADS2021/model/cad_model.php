<?php
include_once ("conexao.php");

$nome = mysqli_real_escape_string($conn, $_POST["Nome"]);
$sobreNome = mysqli_real_escape_string($conn, $_POST["SobreNome"]);
$usuario = mysqli_real_escape_string($conn, $_POST["Usuario"]);
$senha = mysqli_real_escape_string($conn, $_POST["Senha"]);
$pais = mysqli_real_escape_string($conn, $_POST["pais"]);

echo ("$nome - $sobreNome - $usuario -  $senha - $pais");

$query = "INSERT INTO tbpessoa(nome, sobrenome, usuario, senha, pais) 
                VALUES ('$nome', '$sobreNome', '$usuario', '$senha', '$pais')";

echo ("<br><br>");
echo ($query);

if (!mysqli_query($conn, $query))
{
    die("<br>Falha na Inserção dos Dados = $query -> " . mysqli_errno($conn) . " -> " . mysqli_error($conn));
}

$id = mysqli_insert_id($conn);
echo ("<br><br>id =  $id");

$query2 = "INSERT INTO tblogin(usuario, senha, id_tbPessoa) 
                VALUES ('$usuario', $senha, $id)";

if (!mysqli_query($conn, $query2))
{
    die("<br>Falha na Inserção dos Dados = $query2 -> " . mysqli_errno($conn) . " -> " . mysqli_error($conn));
}

echo ("<br><br>");
echo ($query2);
mysqli_close($conn);
?>
