<?php
define('HOST', 'localhost:3307');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'cardiologia');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possivel realizar a conexão.");