<?php
require_once ('verifica_login.php');
?>
<h2>Seja bem vindo, <?php echo $_SESSION['usuario'];?> </h2>

<h2> O que deseja realizar? </h2>

<h2><a href="../CONSULTA/disponibilizaconsulta.php"> Disponibilizar horários para consulta.</a></h2>

<h2>Clique <a href="logout.php">aqui</a> para sair.</h2>