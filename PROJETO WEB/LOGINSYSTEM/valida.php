<?php
session_start();
include '../BD/conecta_bancosqli.php';
 $erro="";
 var_dump($_POST);
 if (empty($_POST)){
 $erro = "<br>Favor digitar nos campos acima.<br>";
 }
 else {
     $usuario = $_POST["txtusu"];
     $senha = $_POST["txtsenha"];
 }

 $query = "SELECT ID_PACIENTE, USUARIO_PACIENTE FROM paciente where USUARIO_PACIENTE = '{$usuario}' and SENHA_PACIENTE = '{$senha}'";

 $result = mysqli_query($conexao, $query);

 $v = mysqli_num_rows($result);

 if($v == 1) {
     $_SESSION['usuario'] = $usuario;
     header('Location: usertools.php');
     exit();
 }
 else {
     $query = "SELECT ID_MEDICO, USUARIO_MEDICO FROM medico where USUARIO_MEDICO = '{$usuario}' and SENHA_MEDICO = '{$senha}'";
     $result = mysqli_query($conexao, $query);
     $v = mysqli_num_rows($result);
     if($v == 1) {
         $_SESSION['usuario'] = $usuario;
         header('Location: doctortools.php');
         exit();
     }
     else {
         $query = "SELECT ID_ADMIN, USUARIO_ADMIN FROM admin where USUARIO_ADMIN = '{$usuario}' and SENHA_ADMIN = '{$senha}'";
         $result = mysqli_query($conexao, $query);
         $v = mysqli_num_rows($result);
     }      if($v == 1) {
         $_SESSION['usuario'] = $usuario;
         $_SESSION['admin'] = 1;
         header('Location: admintools.php');
         exit();
     }  else {
         $_SESSION['nao_autenticado'] = true;
         header('Location: login.php');
 }
 }