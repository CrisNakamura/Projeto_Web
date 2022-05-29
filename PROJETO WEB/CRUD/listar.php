<?php
require_once ('../LOGINSYSTEM/verifica_login.php');
?>
Clique <a href="../LOGINSYSTEM/admintools.php"> aqui</a> para voltar ao menu de ferramentas. <br><br>
<form action="listarOK.php" method="POST">
    Qual tipo de usuario você deseja listar?<br><br>
  <input type="radio" id="paciente" name="tipolista" value="paciente">
  <label for="paciente">Pacientes</label><br><br>
  <input type="radio" id="doutor" name="tipolista" value="doutor">
  <label for="doutor">Doutores</label><br><br>
    <button type="submit">Enviar</button>
</form>


