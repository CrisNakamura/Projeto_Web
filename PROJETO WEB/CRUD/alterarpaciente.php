    <?php
session_start();
// abre conexao com o banco
require_once '../BD/conecta_banco.php';

$id = $_GET["ID_PACIENTE"];

$sql = "select * from paciente where ID_PACIENTE = " . $id;
echo "<br><br>";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$recordSet = $stmt->fetchAll();
$id = $recordSet[0]["ID_PACIENTE"];
$nome = $recordSet[0]["NM_PACIENTE"];
$endereco =     $recordSet[0]["DS_LOGRADOURO"];
$numero = $recordSet[0]["DS_NUMERO"];
$complemento = $recordSet[0]["DS_COMPLEMENTO"];
$bairro = $recordSet[0]["DS_BAIRRO"];
$cep = $recordSet[0]["DS_CEP"];
$ddd = $recordSet[0]["NR_DDD"];
$telefone = $recordSet[0]["NR_TELEFONE"];
$cpf = $recordSet[0]["CPF"];
$usuario = $recordSet[0]["USUARIO_PACIENTE"];
$senha = $recordSet[0]["SENHA_PACIENTE"];
$tipousuario = "paciente";
?>
<html>
<head>
    <title>Alterar Usuário</title>
</head>
<body>
<a href='listar.php'>Listar</a>
<h2>Alterar usuário</h2>



<form action="alterarOK.php" method="post">
    <input type="hidden" class="form-control" id="id" placeholder="" name="id" value="<?php echo $id; ?>">

    <input type="hidden" class="form-control" id="id" placeholder="" name="tipousuario"  value="<?php echo $tipousuario; ?>">

    <label>Nome</label>

    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome."   value="<?php echo $nome; ?>"> <br><br>

    <label>Endereço</label>

    <input type="text" class="form-control" name="endereco" placeholder="Digite um endereço." value="<?php echo $endereco; ?>" > <br><br>

    <label>Numero do Endereço</label>

    <input type="number" class="form-control" name="numero" placeholder="Digite o numero de um endereço." value="<?php echo $numero; ?>"> <br><br>

    <label> Complemento</label>

    <input type="text" class="form-control"  name="complemento" placeholder="Digite o complemento de um endereço."value="<?php echo $complemento; ?>"> <br><br>

    <label>Bairro</label>

    <input type="text" class="form-control"  name="bairro" placeholder="Digite um bairro." value="<?php echo $bairro; ?>"> <br><br>

    <label>CEP</label>

    <input type="number" class="form-control"  name="cep" placeholder="Digite um CEP." value="<?php echo $cep; ?>"> <br><br>

    <label>Telefone</label>

    <input type="number" class="form-control"  name="ddd" placeholder="DDD" value="<?php echo $ddd; ?>">  <input type="number" class="form-control"  name="telefone" placeholder="Digite um telefone." value="<?php echo $telefone; ?>"> <br><br>

    <label> CPF</label>

    <input type="number" class="form-control"  name="cpf" placeholder="Digite um CPF." value="<?php echo $cpf; ?>"> <br><br>

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