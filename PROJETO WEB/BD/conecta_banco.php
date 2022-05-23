<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "cardiologia";

try {
    $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    $conexao = null;
}

