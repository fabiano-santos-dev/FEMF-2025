<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário - CAI</title>
  <link rel="stylesheet" href="../CSS/cadastroUsuario.css">
  <link rel="stylesheet" href="/Projeto_CAI/CSS/outros.css">
  <!-- Ícones do dashboard -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  <!-- MENU LATERAL -->
  <div class="sidebar">
    <div>
      <div class="sidebar-header">
        <h2>CAI</h2>
        <span>Controle de Ativos</span>
      </div>

      <ul>
        <li><a href="../pages/dashboard.php"><i class="fa-solid fa-chart-pie"></i> Dashboard</a></li>
      </ul>
    </div>

    <div class="user-info">
      <div class="user-avatar">I</div>
      <div class="user-name">Israel</div>
      <div class="user-role">Administrador</div>
    </div>
  </div>

  <!-- CONTEÚDO PRINCIPAL -->
  <div class="main-content">
    <div class="form-header">
      <h1>Cadastrar Usuário</h1>
      <p>Preencha os dados abaixo para adicionar um novo usuário ao sistema CAI.</p>
    </div>

    <div class="form-container">
      <form action="../pages/insercaoDosDadosUsuario.php" method="POST">
        <div class="form-group">
          <label for="nome">Nome Completo</label>
          <input type="text" id="nome" name="nome" placeholder="Digite o nome completo" required>
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>
        </div>

        <div class="form-group">
          <label for="cargo">Cargo</label>
          <select id="cargo" name="cargo" required>
            <option value="">Selecione...</option>
            <option value="Administrador">Administrador</option>
            <option value="Técnico">Técnico</option>
            <option value="Usuário">Usuário</option>
          </select>
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="Digite a senha" required>
        </div>

        <div class="form-group">
          <label for="confirmar">Confirmar Senha</label>
          <input type="password" id="confirmar" name="confirmar" placeholder="Confirme a senha" required>
        </div>

        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </div>
</body>

</html>