<?php
function connectDatabase()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    return $conn;
}

function sanitizeInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}
