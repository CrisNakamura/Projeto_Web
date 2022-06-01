<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../LOGINSYSTEM/style_register.css">
</head>

<body>
    <a href="../PGMS/home.php"><img class="logo" src='../PGMS/IMG/Logo.png' alt='logo'></a>
    <form action="registerdb.php" method="post">
        <div class="form_register">
            <div class="card-top">
                <h2>Cadastro</h2>
            </div>
            <div class="card-group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Digite o seu nome." required> <br><br>
            </div>
            <div class="card-group">
                <label>Endereço</label>
                <input type="text" name="endereco" placeholder="Digite o seu endereço." required> <br><br>
            </div>
            <div class="card-group">
                <label>Numero do Endereço</label>
                <input type="number" name="numendereco" placeholder="Digite o numero do seu endereço." required> <br><br>
            </div>
            <div class="card-group">
                <label> Complemento</label>
                <input type="text" name="complemento" placeholder="Digite o complemento do seu endereço."> <br><br>
            </div>
            <div class="card-group">
                <label>Bairro</label>
                <input type="text" name="bairro" placeholder="Digite o seu bairro." required> <br><br>
            </div>
            <div class="card-group">
                <label>CEP</label>
                <input type="number" name="cep" placeholder="Digite o seu CEP." required> <br><br>
            </div>
            <div class="card-group">
                <label>Telefone</label>
                <input type="number" name="ddd" placeholder="DDD" required> <input type="number" name="telefone" placeholder="Digite o seu telefone." required> <br><br>
            </div>
            <div class="card-group">
                <label> CPF</label>
                <input type="number" name="cpf" placeholder="Digite o seu CPF." required> <br><br>
            </div>
            <div class="card-group">
                <label>Usuario</label>
                <input type="text" name="usuario" placeholder="Digite o seu nome de usuário." required> <br><br>
            </div>
            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digita a sua senha." required> <br><br>
            </div>
            <div class="card-group">
                <button type="submit">Registrar</button>
            </div>
        </div>
    </form>
</body>

</html>