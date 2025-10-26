<?php
// Definir parâmetros de conexão
$servername = "localhost"; // geralmente localhost
$username = "root";
$password = "";
$dbname = "femf_2025";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>