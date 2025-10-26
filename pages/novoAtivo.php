<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novo Ativo | CAI</title>
  <link rel="stylesheet" href="../CSS/novoAtivo.css">
  <link rel="stylesheet" href="/Projeto_CAI/CSS/outros.css">
  <!-- Ícones Lucide -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
  <aside class="sidebar">
    <div class="logo">
      <button class="logo-btn">CAI</button>
      <p>Controle de Ativos</p>
    </div>
    <nav>
      <ul>
        <li><i data-lucide="layout-dashboard"></i> Dashboard</li>
        <li class="active"><i data-lucide="package"></i> Ativos</li>
        <li><i data-lucide="message-square"></i> Chamados</li>
        <li><i data-lucide="file-text"></i> Relatórios</li>
        <li><i data-lucide="settings"></i> Configurações</li>
      </ul>
    </nav>
    <div class="user">
      <div class="avatar">G</div>
      <div>
        <strong>Visitante</strong>
        <p>Convidado</p>
      </div>
    </div>
  </aside>

  <main class="content">
    <header class="page-header">
      <h1><i data-lucide="plus-circle"></i> Novo Ativo</h1>
      <p>Cadastre um novo ativo no sistema</p>
    </header>

    <section class="form-container">
      <form class="ativo-form">
        <div class="form-group">
          <label for="patrimonio">Patrimônio</label>
          <input type="text" id="patrimonio" placeholder="Ex: A-12345" required>
        </div>

        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" id="descricao" placeholder="Ex: Notebook Dell Inspiron 15 — i5" required>
        </div>

        <div class="form-group">
          <label for="setor">Setor</label>
          <select id="setor" required>
            <option value="">Selecione</option>
            <option>Laboratório de Redes</option>
            <option>Biblioteca</option>
            <option>Administração</option>
            <option>Outros</option>
          </select>
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" id="status" placeholder="Ex: Novo / Usado" required>
        </div>

        <div class="form-group">
          <label for="responsavel">Responsável / Cadastro</label>
          <input type="text" id="responsavel" placeholder="Ex: João P." required>
        </div>

        <div class="form-group">
          <label for="situacao">Situação</label>
          <select id="situacao" required>
            <option value="">Selecione</option>
            <option value="ativo">Ativo</option>
            <option value="manutencao">Manutenção</option>
            <option value="baixado">Baixado</option>
          </select>
        </div>

        <div class="form-actions">
          <button type="submit" class="btn-primary">
            <i data-lucide="save"></i> Salvar
          </button>
          <button type="reset" class="btn-secondary">
            <i data-lucide="x-circle"></i> Cancelar
          </button>
        </div>
      </form>
    </section>

    <footer>
      <p>Desenvolvido pela equipe — CAI - Faculdade — 2025</p>
    </footer>
  </main>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
