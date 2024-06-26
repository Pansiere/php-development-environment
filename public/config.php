<?php
// Incluindo arquivos de funções e classes
require_once 'includes/functions.php';
require_once 'includes/classes/User.php';

$hostname = "mysql";
$username = "php";
$password = "password";
$database = "DB";

// Criar a conexão com o MySQL usando MySQLi
$conn = new mysqli($hostname, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "\nConectado ao banco de dados com sucesso!\n" . PHP_EOL;
