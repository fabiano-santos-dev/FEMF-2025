<?php
session_start();

include('conexao.php');


// Recebe e sanitiza os dados do formulário
$login = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo ("$login,$senha");

// Prepara a consulta SQL de forma segura (prevenindo SQL Injection)
$sql = "SELECT ID,usuario,senha,perfil  FROM dados_loguin WHERE usuario = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();


if ($result && $result->num_rows === 1) {
    $dados = $result->fetch_assoc();
    //var_dump($dados);

    if ($senha === $dados['senha']) {
        $_SESSION['usuario_id'] = $dados['ID'];
        $_SESSION['usuario_nome'] = $dados['usuario'];
        $_SESSION['usuario_perfil'] = $dados['perfil'];
        header("Location: ../pages/dashboard.php");
        exit;
    } else {
        $_SESSION['erro_login'] = "Usuário ou senha incorretos.";
        header("Location: ../index.php");
        exit;
    }
} else {
    $_SESSION['erro_login'] = "Usuário não encontrado.";
    header("Location: ../index.php");
    exit;
}
