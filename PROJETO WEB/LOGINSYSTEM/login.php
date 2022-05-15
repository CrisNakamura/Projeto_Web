<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Página de Acesso</title>
    <link rel="stylesheet" href="../LOGINSYSTEM/style.css">
</head>

<body>
<form action="valida.php" method="post">
        <div class="card">
            <div class="card-top">
                <h2> Página de Login</h2>
            </div>
            <div class="card-group">
                <label>Usuário</label>
                <input type="text" name="txtusu" placeholder="Digite seu nome de usuário." >
            </div>
            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="txtsenha" placeholder="Digite sua senha." >
            </div>
        <div class="card-group">
            <button type="submit">Log In</button>
        </div>
    </form>
    <?php
 var_dump($_GET);

 ?>
</body>

</html>