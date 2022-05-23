<?php
include ('../LOGINSYSTEM/verifica_login.php');
?>

<form action="listarOK.php" method="POST">
    Qual tipo de usuario você deseja listar?<br><br>
  <input type="radio" id="paciente" name="tipolista" value="paciente">
  <label for="paciente">Pacientes</label><br><br>
  <input type="radio" id="doutor" name="tipolista" value="doutor">
  <label for="doutor">Doutores</label><br><br>
    <button type="submit">Enviar</button>
</form>


