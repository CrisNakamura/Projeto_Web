<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "cardiologia";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e)
{
    echo "Erro: " . $e->getMessage();
    $conn = null;
}
?>
