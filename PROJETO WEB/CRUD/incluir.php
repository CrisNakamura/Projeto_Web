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

<?php
session_start();
echo 'Clique <a href="../LOGINSYSTEM/admintools.php"> aqui</a> para voltar ao menu de ferramentas. <br><br>';
echo "<form action='incluir.php' method='POST'> Qual tipo de usuario você deseja incluir? <br><br>
        <input type='radio' id='paciente' name='tipolista' value='paciente'>
        <label for='paciente'>Paciente</label><br><br>
        <input type='radio' id='medico' name='tipolista' value='medico'>
        <label for='medico'>Medico</label><br><br>
        <button type='submit'>Confirmar</button>
        </form>
        <br>
            ";
if (!(isset($_POST["tipolista"]))) {
    $_POST["tipolista"] = 0;
}
$tipousuario = $_POST["tipolista"];

    if ($tipousuario == "paciente") {
        $_SESSION['tipousuario'] = "paciente";
        echo '
    <form action="incluirOK.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" placeholder="Digite o nome." required> <br><br>
    <label>Endereço</label>
    <input type="text" name="endereco" placeholder="Digite o endereço." required> <br><br>
    <label>Numero do Endereço</label>
    <input type="number" name="numendereco" placeholder="Digite o num do endereço." required> <br><br>
    <label> Complemento</label>
    <input type="text" name="complemento" placeholder="Digite o complemento do endereço."> <br><br>
    <label>Bairro</label>
    <input type="text" name="bairro" placeholder="Digite o bairro." required> <br><br>
    <label>CEP</label>
    <input type="number" name="cep" placeholder="Digite o CEP." required> <br><br>
    <label>Telefone</label>
    <input type="number" name="ddd" placeholder="DDD" required> <input type="number" name="telefone" placeholder="Digite o telefone." required> <br><br>
    <label> CPF</label>
    <input type="number" name="cpf" placeholder="Digite o CPF." required> <br><br>
    <label>Usuario</label>
    <input type="text" name="usuario" placeholder="Digite o nome de usuário." required> <br><br>
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Digita a senha." required> <br><br>
    <button type="submit">Registrar</button>
    </form>
    ';
    }

    if ($tipousuario == "medico") {
        $_SESSION['tipousuario'] = "medico";
        echo '
    <form action="incluirOK.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" placeholder="Digite o nome." required> <br><br>
    <label>Numero do CRM</label>
    <input type="number" name="crm" placeholder="Digite o CRM." required> <br><br>
    <label>Usuario</label>
    <input type="text"  name="usuario" placeholder="Digite o nome de usuário." required> <br><br>
    <label>Senha</label>
    <input type="text"  name="senha" placeholder="Digita a senha." required> <br><br>
    <br><br>
    <button type="submit">Enviar</button>
</form>
';
    }


?>
</body>
</html>