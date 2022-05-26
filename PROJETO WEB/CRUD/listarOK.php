<?php
require_once '../BD/conecta_banco.php';
$tipolista = $_POST['tipolista'];

echo 'Clique <a href="../LOGINSYSTEM/admintools.php"> aqui</a> para voltar ao menu de ferramentas. <br>';
echo "<h2>Nomes dos Usuarios</h2>";
switch ($tipolista) {
    case "paciente":
        $_SESSION["lista"] = "paciente";
        $stmt = $conexao->prepare("SELECT * FROM paciente");
        $stmt->execute();
        $recordSet = $stmt->fetchAll();
        foreach ($recordSet as $k => $v) {
            echo "<a href='alterarpaciente.php?ID_PACIENTE=" . $v['ID_PACIENTE'] . "'>Alterar</a> ou
            <a href='excluir.php?ID_PACIENTE=" . $v['ID_PACIENTE'] . "'>Excluir</a> --> " . $v['ID_PACIENTE'] . " | " . $v['NM_PACIENTE'] . " | " . $v['DS_LOGRADOURO'] . " | " . $v['DS_NUMERO'] .
                " | " . $v['DS_COMPLEMENTO'] . " | " . $v['DS_BAIRRO'] . " | " . $v['DS_CEP'] . " | " . $v['NR_DDD'] .
                " -  " . $v['NR_TELEFONE'] . " | " . $v['CPF'] . " | " . $v['USUARIO_PACIENTE'] . " | " . $v['SENHA_PACIENTE'] . "<br><br>";;
        }
        break;

    case "doutor":
        $_SESSION["lista"] = "doutor";
        $stmt = $conexao->prepare("SELECT * FROM medico");
        $stmt->execute();
        $recordSet = $stmt->fetchAll();
                foreach ($recordSet as $k => $v) {
                    echo "<a href='alterarmedico.php?ID_MEDICO=".$v['ID_MEDICO']."'>Alterar</a> ou
            <a href='excluir.php?ID_MEDICO=".$v['ID_MEDICO']."'>Excluir</a> -->" .
                        $v['ID_MEDICO'] . " | " . $v['NM_MEDICO'] . " | " . $v['NR_CRM'] . " | " . $v['USUARIO_MEDICO'] .
                        " | " . $v['SENHA_MEDICO'] . "<br><br>";




                }
        break;
}
?>