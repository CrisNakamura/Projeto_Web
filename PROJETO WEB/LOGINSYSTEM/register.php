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
<form action="registerdb.php" method="post">
            <h2> Página de Registro</h2>
    <label>Nome</label>

        <input type="text" name="nome" placeholder="Digite o seu nome." required> <br><br>

    <label>Endereço</label>

        <input type="text" name="endereco" placeholder="Digite o seu endereço." required> <br><br>

    <label>Numero do Endereço</label>

        <input type="number" name="numendereco" placeholder="Digite o numero do seu endereço." required> <br><br>

    <label> Complemento</label>

        <input type="text" name="complemento" placeholder="Digite o complemento do seu endereço."> <br><br>

    <label>Bairro</label>

        <input type="text" name="bairro" placeholder="Digite o seu bairro." required> <br><br>

    <label>CEP</label>

        <input type="number" name="cep" placeholder="Digite o seu CEP." required> <br><br>

    <label>Telefone</label>

        <input type="number" name="ddd" placeholder="DDD" required>  <input type="number" name="telefone" placeholder="Digite o seu telefone." required> <br><br>

    <label> CPF</label>

    <input type="number" name="cpf" placeholder="Digite o seu CPF." required> <br><br>

    <label>Usuario</label>

    <input type="text" name="usuario" placeholder="Digite o seu nome de usuário." required> <br><br>

    <label>Senha</label>
    <input type="password" name="senha" placeholder="Digita a sua senha." required> <br><br>

            <button type="submit">Registrar</button>
</form>
</body>
</html>