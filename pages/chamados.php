<?php
include 'conexao.php';

// Filtros
$status = isset($_GET['status']) ? $_GET['status'] : 'Todos';
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'Todos';
$busca = isset($_GET['busca']) ? trim($_GET['busca']) : '';

$query = "SELECT * FROM chamados WHERE 1=1";

// Aplicar filtros dinamicamente
if ($status != 'Todos') {
  $query .= " AND status = '$status'";
}
if ($tipo != 'Todos') {
  $query .= " AND tipo = '$tipo'";
}
if ($busca != '') {
  $query .= " AND (numero_chamado LIKE '%$busca%' OR ativo LIKE '%$busca%' OR descricao LIKE '%$busca%')";
}

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CAI - Chamados</title>
  <link rel="stylesheet" href="/Projeto_CAI/CSS/chamados.css">
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
        <li><a href="chamados.php" class="ativo">🛠️ Chamados</a></li>
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
      <h1>🛠️ Chamados</h1>
      <p>Visão geral do sistema</p>
    </header>

    <section class="area-chamados">

      <form class="filtros" method="GET">
        <div class="filtro">
          <label for="status">Status</label>
          <select id="status" name="status">
            <option <?= $status == 'Todos' ? 'selected' : ''; ?>>Todos</option>
            <option <?= $status == 'Em andamento' ? 'selected' : ''; ?>>Em andamento</option>
            <option <?= $status == 'Concluído' ? 'selected' : ''; ?>>Concluído</option>
            <option <?= $status == 'Pendente' ? 'selected' : ''; ?>>Pendente</option>
          </select>
        </div>

        <div class="filtro">
          <label for="tipo">Tipo</label>
          <select id="tipo" name="tipo">
            <option <?= $tipo == 'Todos' ? 'selected' : ''; ?>>Todos</option>
            <option <?= $tipo == 'Hardware' ? 'selected' : ''; ?>>Hardware</option>
            <option <?= $tipo == 'Software' ? 'selected' : ''; ?>>Software</option>
            <option <?= $tipo == 'Rede' ? 'selected' : ''; ?>>Rede</option>
          </select>
        </div>

        <div class="busca">
          <input type="text" name="busca" placeholder="Número, ativo, descrição..." value="<?= htmlspecialchars($busca) ?>">
        </div>

        <div class="acoes">
          <a href="novoChamado.php"><button type="button" class="novo-chamado">+ Novo Chamado</button></a>
          <button type="submit" class="exportar">🔍 Filtrar</button>
        </div>
      </form>

      <table class="tabela-chamados">
        <thead>
          <tr>
            <th># Chamado</th>
            <th>Ativo</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Responsável</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?= htmlspecialchars($row['numero_chamado']); ?></td>
              <td><?= htmlspecialchars($row['ativo']); ?></td>
              <td><?= htmlspecialchars($row['descricao']); ?></td>
              <td><?= htmlspecialchars($row['tipo']); ?></td>
              <td>
                <?php
                $classe = strtolower(str_replace(' ', '', $row['status']));
                echo "<span class='status $classe'>{$row['status']}</span>";
                ?>
              </td>
              <td><?= htmlspecialchars($row['responsavel']); ?></td>
              <td><?= htmlspecialchars($row['data_abertura']); ?></td>
              <td>
                <a href="editarChamado.php?id=<?= $row['id']; ?>"><button class="editar">✏️</button></a>
                <a href="excluirChamado.php?id=<?= $row['id']; ?>" onclick="return confirm('Deseja excluir este chamado?');">
                  <button class="excluir">🗑️</button>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>

    <footer class="rodape">
      Desenvolvido pela equipe — <strong>CAI</strong> • Faculdade — <strong>2025</strong>
    </footer>
  </main>

</body>

</html>