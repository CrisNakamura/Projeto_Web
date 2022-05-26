
<?php
session_start();
require_once '../BD/conecta_banco.php';
print_r($_POST);
echo "<br><br>";

if ($_SESSION['tipousuario'] == "paciente") {
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
    unset($_SESSION["tipousuario"]);
}
if ($_SESSION['tipousuario'] == "medico"){
    $nome = $_POST["nome"];
    $crm = $_POST["crm"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $sql = "INSERT INTO medico (NM_MEDICO, NR_CRM, USUARIO_MEDICO, SENHA_MEDICO) VALUES ('" . $nome . "','" . $crm . "','" . $usuario . "','" . $senha . "')";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    unset($_SESSION["tipousuario"]);

}
?>
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
Inserção no banco de dados aplicada!<br>
Clique <a href="../LOGINSYSTEM/admintools.php"> aqui</a> para voltar ao menu de ferramentas.
</body>
</html>