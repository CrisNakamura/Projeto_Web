<?php
session_start();
require_once '../BD/conecta_bancosqli.php';

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$numendereco = $_POST["numendereco"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$ddd = $_POST["ddd"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "INSERT  INTO paciente (NM_PACIENTE, DS_LOGRADOURO, DS_NUMERO, DS_COMPLEMENTO, DS_BAIRRO, DS_CEP, NR_DDD, NR_TELEFONE, CPF, USUARIO_PACIENTE, SENHA_PACIENTE) 
                VALUES ('" . $nome . "','" . $endereco . "','" . $numendereco . "','" . $complemento . "','" . $bairro . "','" . $cep . "',
                '" . $ddd . "','" . $telefone . "','" . $cpf . "','" . $usuario . "','" . $senha . "')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
?>
<html>
<a href="../PGMS/home.php"><img class="logo" src='../PGMS/IMG/Logo.png' alt='logo'></a>
<link rel="stylesheet" href="../LOGINSYSTEM/style_registerOK.css">
<div class="form_register">
    <div class="card-top">
        <h2>Cadastro realizado!</h2>
    </div>
    <div class="card-group">
        <a href="../LOGINSYSTEM/login_user.php">Login</a>
    </div>

</html>