<?php
session_start();

include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    // Redireciona para login se a sessão não existir
    header("Location: ../index.php");
    exit;
}

// Recupera dados da sessão
$usuario_id = $_SESSION['usuario_id'];
$usuario_nome = $_SESSION['usuario_nome'];
$usuario_perfil =  $_SESSION['usuario_perfil'];


function primeiraLetra($usuario_nome)
{
    // Remove espaços extras
    $usuario_nome = trim($usuario_nome);

    // Pega a primeira letra e transforma em maiúscula
    return strtoupper(substr($usuario_nome, 0, 1));
}

// Exemplo de uso
$inicial = primeiraLetra($usuario_nome);
// Resultado: F



// Prepara a consulta SQL de forma segura (prevenindo SQL Injection)
$sql = "SELECT COUNT(ID) AS total FROM dados_loguin";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();


if ($result) {
    $row = $result->fetch_assoc();
    $total = $row['total'];
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAI - Dashboard</title>
    <link rel="stylesheet" href="/Projeto_CAI/CSS/dashboard.css">
    <link rel="stylesheet" href="/Projeto_CAI/CSS/outros.css">
</head>

<body>

    <!-- MENU LATERAL -->
    <aside class="menu-lateral">
        <div class="logo-sistema">
            <div class="icone-logo">CAI</div>
            <span class="titulo-logo">Controle de Ativos</span>
        </div>

        <nav class="navegacao">
            <ul>
                <li><a href="../pages/dashboard.php" class="ativo">📊 Dashboard</a></li>
                <li><a href="../pages/ativos.php">💻 Ativos</a></li>
                <li><a href="../pages/chamados.php">🛠️ Chamados</a></li>
                <li><a href="../pages/relatorios.php">📈 Relatórios</a></li>
                <li><a href="../pages/configuracoes.php">⚙️ Configurações</a></li>
            </ul>
        </nav>

        <div class="usuario">
            <div class="avatar"><?php echo $inicial; ?></div>
            <div class="info-usuario">
                <span class="nome-usuario" style="font-size:12px;"><?php echo ($usuario_nome); ?></span>
                <span class="cargo-usuario"><?php echo ($usuario_perfil); ?></span>
            </div>
        </div>
    </aside>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="conteudo-principal">

        <header class="cabecalho-dashboard">
            <h1><i>📊</i> Dashboard</h1>
            <p>Visão geral do sistema CAI</p>
        </header>

        <section class="painel-informacoes">
            <div class="cartao">
                <h3>Ativos Fixos<br><br>💻 </h3>
                <a href="novoAtivo.php" style="text-decoration: none;">
                    <h4 style="color: #00BFA6;">Cadastrar</h4>
                </a>
            </div>

            <div class="cartao">
                <h3>Chamados Abertos</h3>
                <a href="chamados.php">
                    <br>👨‍💻
                    <p></p>
                </a>
                <p class="valor">8</p>
            </div>

            <div class="cartao">
                <h3>Usuários<br><br>👤➕</h3>
                <a href="cadastroUsuario.php" style="text-decoration: none;">
                    <h4 style="color: #00BFA6;">Cadastrar</h4>
                </a>
            </div>
        </section>

        <section class="grafico-sessao">
            <h2>Relatórios Recentes</h2>
            <div class="area-grafico">
                <p>(Gráfico de desempenho — futuro componente JS)</p>
            </div>
        </section>

    </main>

</body>

</html>