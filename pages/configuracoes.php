<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAI - Configurações</title>
    <link rel="stylesheet" href="/Projeto_CAI/CSS/configuracoes.css">
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
                <li><a href="dashboard.php">📊 Dashboard</a></li>
                <li><a href="ativos.php">💻 Ativos</a></li>
                <li><a href="chamados.php">🛠️ Chamados</a></li>
                <li><a href="relatorios.php">📈 Relatórios</a></li>
                <li><a href="configuracoes.php" class="ativo">⚙️ Configurações</a></li>
            </ul>
        </nav>

        <div class="usuario">
            <div class="avatar">G</div>
            <div class="info-usuario">
                <span class="nome-usuario">Visitante</span>
                <span class="cargo-usuario">Convidado</span>
            </div>
        </div>
    </aside>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="conteudo-principal">
        <header class="cabecalho-pagina">
            <h1>⚙️ Configurações</h1>
            <p>Visão geral do sistema</p>
        </header>

        <section class="area-config">
            <h2>Configurações</h2>
            <p class="descricao">Gerenciamento de usuários e sistema</p>

            <div class="bloco-sistema">
                <h3>Informações do Sistema</h3>
                <div class="linha-form">
                    <div class="campo">
                        <label for="nome-sistema">Nome do Sistema</label>
                        <input type="text" id="nome-sistema" value="CAI - Controle de Ativos">
                    </div>
                    <div class="campo">
                        <label for="instituicao">Instituição</label>
                        <input type="text" id="instituicao" value="Faculdade Modelo">
                    </div>
                </div>
            </div>

            <div class="botoes-superiores">
                <button class="btn-salvar">💾 Salvar Alterações</button>
                <button class="btn-novo">+ Novo Usuário</button>
            </div>

            <div class="bloco-usuarios">
                <h3>Gerenciamento de Usuários</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>Perfil</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fabiano A. Santos</td>
                            <td>fabiano</td>
                            <td>Administrador</td>
                            <td>✏️ 🗑️</td>
                        </tr>
                        <tr>
                            <td>Mariana R.</td>
                            <td>mariana</td>
                            <td>Suporte</td>
                            <td>✏️ 🗑️</td>
                        </tr>
                        <tr>
                            <td>Suzana F.</td>
                            <td>suzana</td>
                            <td>Administrador</td>
                            <td>✏️ 🗑️</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <footer class="rodape">
            Desenvolvido pela equipe — <strong>CAI</strong> • Faculdade — <strong>2025</strong>
        </footer>
    </main>

</body>

</html>