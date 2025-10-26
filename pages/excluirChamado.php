<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM chamados WHERE id = $id";
    mysqli_query($conn, $sql);
}

header('Location: chamados.php');
exit;
