<?php
 $erro="";
 var_dump($_POST);
 if (empty($_POST)){
 $erro = "<br>Favor digitar nos campos acima.<br>";
 }
 else
 {
 $usuario = $_POST["txtusu"];
 $senha = $_POST["txtsenha"];
 if ($usuario == "adm" and $senha == "adm"  ) {
header('Location: admintools.php');
 }
 elseif ($usuario == "usuario" and $senha == "usuario"  ) {
    header('Location: usertools.php');
     }
     elseif ($usuario == "doutor" and $senha == "doutor"  ) {
        header('Location: doctortools.php');
         }
         else {
            $erro = "<br>Senha Invalida.<br>";
         }

 }
 if (!($erro == "")) {
    $chamada = "Location: login.php?mensagemErro=".$erro;
    header($chamada);

 }
