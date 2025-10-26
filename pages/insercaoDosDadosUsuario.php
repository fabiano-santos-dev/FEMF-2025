<?php
include('conexao.php'); // inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $cargo     = $_POST['cargo'];
    $senha     = $_POST['senha'];
    $confirmar = $_POST['confirmar'];

    // Verifica se as senhas coincidem
    if ($senha !== $confirmar) {
        echo "<script>alert('As senhas não coincidem!'); history.back();</script>";
        exit;
    }

    // Criptografa a senha (recomendado)
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara a query com placeholders
    $sql = "INSERT INTO dados_loguin (usuario, senha, perfil, nome, confirmarSenha) VALUES (?,?,?,?,?)";

    // Prepara o comando
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Erro na preparação da query: " . mysqli_error($conn));
    }

    // Faz o bind dos parâmetros (5 strings)
    mysqli_stmt_bind_param($stmt, "sssss", $email, $senha, $cargo, $nome, $confirmar);

    // Executa e verifica o resultado
    if (mysqli_stmt_execute($stmt)) {
        echo "<script> window.location='cadastradoComSucesso.html';</script>";
    } else {
        echo "Erro ao cadastrar: " . mysqli_stmt_error($stmt);
    }

    // Fecha conexões
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
