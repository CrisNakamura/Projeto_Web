<?php
session_start();
require_once '../BD/conecta_banco.php';
print_r($_SESSION['lista']);
$lista = $_SESSION['lista'];
switch ($lista) {
    case 'paciente':
        $id = $_GET["ID_PACIENTE"];
        $sql = "delete from paciente where ID_PACIENTE = " . $id;
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        unset($_SESSION['lista']);
        header('Location: listar.php');
        break;
    case 'doutor':
        $id = $_GET["ID_MEDICO"];
        $sql = "delete from medico where ID_MEDICO = " . $id;
        $stmt = $$conexao->prepare($sql);
        $stmt->execute();
        unset($_SESSION['lista']);
        header('Location: listar.php');
        break;

    case 'admin':
        $id = $_GET["ID_ADMIN"];
        $sql = "delete from admin where ID_ADMIN = " . $id;
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        unset($_SESSION['lista']);
        header('Location: listar.php');
        break;
}
?>
