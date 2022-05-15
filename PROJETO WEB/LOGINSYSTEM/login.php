<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Acesso</title>
    <link rel="stylesheet" href="../LOGINSYSTEM/style.css">
</head>

<body>
<form action="valida.php" method="POST">
        <div class="card">
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