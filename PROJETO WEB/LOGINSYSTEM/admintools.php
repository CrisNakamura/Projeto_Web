<?php
include ('verifica_login.php');
include ('verifica_admin.php')
?>
<h1>Seja bem vindo, <?php echo $_SESSION['usuario'];?> </h1>

<h2> O que deseja realizar? </h2>
<h3><a href="../CRUD/listar.php">Listar dados registrados no banco </a></h3>
<h3><a href="../CRUD/incluir.php">Incluir dados no banco</a></h3>
<br>
<h2>Clique <a href="logout.php">aqui</a> para sair.</h2>