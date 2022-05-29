

<?php
require_once '../BD/conecta_banco.php';
session_start();


$dataconsulta = $_POST["dataconsulta"];
$inicioconsulta = $_POST["inicioconsulta"];
$terminoconsulta = $_POST["terminoconsulta"];
$contamedico = $_SESSION["usuario"];



if (empty($dataconsulta) || empty($inicioconsulta) || empty($terminoconsulta) || empty($contamedico)){
    header('Location: disponibilizaconsulta.php');
exit();
}

$sql = "SELECT ID_MEDICO FROM medico WHERE USUARIO_MEDICO= " . "'$contamedico'";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$idmedico = $result["ID_MEDICO"];

$sql = "INSERT INTO `consulta` (`ID_CONSULTA`, `STATUS_CONSULTA`, `ID_PACIENTE`, `ID_MEDICO`, `DS_DATA`, `DS_HORAINICIO`, `DS_HORATERMINO`)
       VALUES (NULL, 1, NULL, '" . $idmedico . "','" . $dataconsulta . "','" . $inicioconsulta . "','" . $terminoconsulta  . "')";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$_SESSION["insertfeito"] = "feito";

header('Location: disponibilizaconsulta.php');

