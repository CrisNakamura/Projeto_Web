<?php
// abre conexao com o banco
require_once '../BD/conecta_banco.php';
echo "<br><br>";
$tipousuario = $_POST["tipousuario"];


switch($tipousuario) {
    case "paciente":
$id = $_POST["id"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$ddd = $_POST["ddd"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "UPDATE paciente SET NM_PACIENTE = '" . $nome . "',DS_LOGRADOURO = '" . $endereco . "',DS_NUMERO = '" . $numero . "',DS_COMPLEMENTO = '" . $complemento . "',
        DS_BAIRRO = '" . $bairro . "',DS_CEP = '" . $cep . "',NR_DDD = '" . $ddd . "',NR_TELEFONE = '" . $telefone . "',CPF = '" . $cpf . "',
        USUARIO_PACIENTE = '" . $usuario . "',SENHA_PACIENTE = '" . $senha . "' WHERE ID_PACIENTE = " . $id;

    break;

    case "medico":
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $crm = $_POST["crm"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
$sql = "UPDATE medico SET NM_MEDICO = '" .$nome . "',NR_CRM = '" .$crm . "',USUARIO_MEDICO= '" . $usuario . "',SENHA_MEDICO = '" . $senha . "
       ' WHERE ID_MEDICO = " . $id;
    break;
}
$stmt = $conexao->prepare($sql);
$stmt->execute();
header('Location: listar.php');

?>
