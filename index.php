<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAI - Login</title>
    <link rel="stylesheet" href="../Projeto_CAI/CSS/estilo_login.css">
</head>

<body>

    <main class="container-login">
        <div class="caixa-login">
            <div class="logo-login">CAI</div>
            <h2>Bem-vindo</h2>
            <p>Acesse o sistema com suas credenciais</p>

            <form action="pages/valida_login.php" method="POST" class="formulario-login">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

                <div class="botoes">
                    <button type="submit" name="entrar" class="botao-entrar">Entrar</button>
                </div>
            </form>

            <p class="rodape">Desenvolvido pela equipe — CAI • Faculdade — 2025</p>
        </div>
    </main>

</body>

</html>