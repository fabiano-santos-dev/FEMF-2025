<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAI - Relatórios</title>
    <link rel="stylesheet" href="/Projeto_CAI/CSS/relatorios.css">
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
                <li><a href="relatorios.php" class="ativo">📈 Relatórios</a></li>
                <li><a href="configuracoes.php">⚙️ Configurações</a></li>
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
            <h1>📈 Relatórios</h1>
            <p>Visão geral do sistema</p>
        </header>

        <section class="area-relatorios">
            <form class="form-relatorio">
                <div class="coluna-esquerda">
                    <label for="tipo-relatorio">Tipo de Relatório</label>
                    <select id="tipo-relatorio">
                        <option value="ativos">Ativos</option>
                        <option value="chamados">Chamados</option>
                        <option value="usuarios">Usuários</option>
                        <option value="setores">Setores</option>
                    </select>

                    <label for="busca">Busca personalizada</label>
                    <input type="text" id="busca" placeholder="Patrimônio, setor ou descrição...">
                </div>

                <div class="coluna-direita">
                    <label for="periodo">Período</label>
                    <select id="periodo">
                        <option value="todos">Todos</option>
                        <option value="ultimo-mes">Último mês</option>
                        <option value="ultimos-3-meses">Últimos 3 meses</option>
                        <option value="ultimo-ano">Último ano</option>
                    </select>

                    <div class="botoes">
                        <button type="reset" class="btn-limpar">Limpar</button>
                        <button type="submit" class="btn-gerar">Gerar Relatório</button>
                    </div>
                </div>
            </form>

            <p class="info">Selecione filtros e gere um relatório</p>
        </section>

        <footer class="rodape">
            Desenvolvido pela equipe — <strong>CAI</strong> • Faculdade — <strong>2025</strong>
        </footer>
    </main>

</body>

</html>