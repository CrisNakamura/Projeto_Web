<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action='disponibilizaconsultaOK.php' method='post'>
    <label>Marque o dia de inicio da consulta que deseja disponibilizar </label>
    <input type='date' class='form-control' name='dataconsulta'><br><br>
    <label>Marque o horário de inicio da consulta que deseja disponibilizar</label>
    <input type='time' class='form-control' name='inicioconsulta'><br><br>
       <label>Marque o horário de término da consulta que deseja disponibilizar </label>
    <input type='time' class='form-control' name='terminoconsulta'><br><br>
<input type="submit">
</form>
<br>Clique <a href="../LOGINSYSTEM/logout.php">aqui</a> para sair.
</body>
</html>

<?php
session_start();
if (empty($_SESSION["insertfeito"])){
$_SESSION["insertfeito"] = "naofeito";
}

    if ($_SESSION['insertfeito'] == "feito") {
        echo "<br><br>Horário Disponibilizado Com Sucesso!";

    }
