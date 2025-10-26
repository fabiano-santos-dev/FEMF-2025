<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAI - Ativos</title>
    <link rel="stylesheet" href="/Projeto_CAI/CSS/ativos.css">
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
                <li><a href="ativos.php" class="ativo">💻 Ativos</a></li>
                <li><a href="chamados.php">🛠️ Chamados</a></li>
                <li><a href="relatorios.php">📈 Relatórios</a></li>
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
            <h1>💻 Ativos</h1>
            <p>Visão geral do sistema</p>
        </header>

        <section class="area-ativos">

            <div class="filtros">
                <div class="filtro">
                    <label for="setor">Setor</label>
                    <select id="setor">
                        <option>Todos</option>
                        <option>Laboratório</option>
                        <option>Biblioteca</option>
                        <option>Administração</option>
                    </select>
                </div>



                <div class="acoes">
                    <a href="../pages/novoAtivo.php"><button class="novo-ativo">+ Novo Ativo</button></a>
                    <button class="exportar">Exportar CSV</button>
                </div>
            </div>

            <table class="tabela-ativos">
                <thead>
                    <tr>
                        <th>Patrimônio</th>
                        <th>Descrição</th>
                        <th>Setor</th>
                        <th>Responsável</th>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A-10234</td>
                        <td>Notebook Dell Inspiron 15 — i5</td>
                        <td>Laboratório de Redes</td>
                        <td>Mariana R.</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td>
                            <button class="editar">✏️</button>
                            <button class="excluir">🗑️</button>
                        </td>
                    </tr>
                    <tr>
                        <td>A-09218</td>
                        <td>Impressora HP LaserJet</td>
                        <td>Biblioteca</td>
                        <td>João P.</td>
                        <td><span class="status manutencao">Manutenção</span></td>
                        <td>
                            <button class="editar">✏️</button>
                            <button class="excluir">🗑️</button>
                        </td>
                    </tr>
                    <tr>
                        <td>A-11000</td>
                        <td>Desktop Lenovo V50</td>
                        <td>Administração</td>
                        <td>Claudia M.</td>
                        <td><span class="status baixado">Baixado</span></td>
                        <td>
                            <button class="editar">✏️</button>
                            <button class="excluir">🗑️</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <footer class="rodape">
            Desenvolvido pela equipe — <strong>CAI</strong> • Faculdade — <strong>2025</strong>
        </footer>
    </main>

</body>

</html>