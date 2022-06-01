<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../LOGINSYSTEM/style_login.css">
</head>

<body>
<a href="../PGMS/home.php"><img class="logo" src='../PGMS/IMG/Logo.png' alt='logo'></a>
<form action="valida.php" method="POST">
        <div class="form_login">
            <div class="card-top">
                <h2> Página de Login</h2>
            </div>
            <div class="card-group">
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <p>Usuário ou senha inválidos.</p>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
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
</body>

</html>