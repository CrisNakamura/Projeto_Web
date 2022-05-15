<?php
session_start();
require_once '../BD/conecta_banco.php';
print_r($_POST);
	echo "<br><br>";
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
	echo $sql;
	echo "<br><br>";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
