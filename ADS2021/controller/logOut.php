<?php
session_start(); 

if(isset($_SESSION['nome'])){
  // se você possui algum cookie relacionado com o login deve ser removido
  session_destroy();
  header("location:../view/login.php");
  exit();
} 
header("location:../view/login.php");
exit();
?>