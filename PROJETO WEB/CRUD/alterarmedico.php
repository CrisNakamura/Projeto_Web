<?php
session_start();
// abre conexao com o banco
require_once '../BD/conecta_banco.php';

$id = $_GET["ID_MEDICO"];

$sql = "select * from medico where ID_MEDICO = " . $id;
echo "<br><br>";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$recordSet = $stmt->fetchAll();
$id = $recordSet[0]["ID_MEDICO"];
$nome = $recordSet[0]["NM_MEDICO"];
$crm = $recordSet[0]["NR_CRM"];
$usuario = $recordSet[0]["USUARIO_MEDICO"];
$senha = $recordSet[0]["SENHA_MEDICO"];
$tipousuario = "medico";
?>
<html>
<head>
    <title>Alterar Usuário</title>
</head>
<body>
<a href='listar.php'>Listar</a>
<h2>Alterar usuário</h2>



<form action="alterarOK.php" method="post">

    <input type="hidden" class="form-control" id="id" placeholder="" name="id"
           value="<?php echo $id; ?>">

        <input type="hidden" class="form-control" id="id" placeholder="" name="tipousuario"  value="<?php echo $tipousuario; ?>">

    <label>Nome</label>

    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome."   value="<?php echo $nome; ?>"> <br><br>

    <label>CRM</label>

    <input type="text" class="form-control" name="crm" placeholder="Digite o seu CRM" value="<?php echo $crm; ?>"><br><br>

    <label>Usuario</label>

    <input type="text" class="form-control"  name="usuario" placeholder="Digite um nome de usuário." value="<?php echo $usuario; ?>"> <br><br>

    <label>Senha</label>
    <input type="text" class="form-control"  name="senha" placeholder="Digita uma  senha." value="<?php echo $senha; ?>"> <br><br>

    <br><br>
    <button type="submit">Enviar</button>
</form>





</div>
</body>
</html>