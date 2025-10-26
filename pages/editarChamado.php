<?php
include 'conexao.php';

// Verificar se veio um ID na URL
if (!isset($_GET['id'])) {
    die("ID do chamado não informado!");
}

$id = intval($_GET['id']);

// Se o formulário for enviado (método POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero_chamado'];
    $ativo = $_POST['ativo'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $status = $_POST['status'];
    $responsavel = $_POST['responsavel'];
    $data = $_POST['data_abertura'];

    $sql = "UPDATE chamados 
            SET numero_chamado='$numero', ativo='$ativo', descricao='$descricao', 
                tipo='$tipo', status='$status', responsavel='$responsavel', data_abertura='$data'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header('Location: chamados.php');
        exit;
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conn);
    }
}

// Buscar os dados atuais do chamado
$sql = "SELECT * FROM chamados WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("Chamado não encontrado!");
}

$chamado = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chamado - CAI</title>
    <link rel="stylesheet" href="/Projeto_CAI/CSS/chamados.css">
    <link rel="stylesheet" href="/Projeto_CAI/CSS/outros.css">
    <style>
        .form-editar {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
        }

        .form-editar h2 {
            color: #082f57;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-editar label {
            display: block;
            margin-top: 12px;
            color: #082f57;
            font-weight: 500;
        }

        .form-editar input,
        .form-editar select,
        .form-editar textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-top: 5px;
            font-family: "Poppins", sans-serif;
        }

        .botoes {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .botoes button {
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
        }

        .salvar {
            background-color: #00bfa6;
            color: white;
        }

        .cancelar {
            background-color: #ccc;
        }

        .cancelar a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <main class="conteudo-principal">
        <header class="cabecalho-pagina">
            <h1>✏️ Editar Chamado</h1>
            <p>Atualize as informações abaixo</p>
        </header>

        <form class="form-editar" method="POST">
            <h2>Informações do Chamado</h2>

            <label for="numero_chamado">Número do Chamado</label>
            <input type="text" name="numero_chamado" id="numero_chamado" value="<?= htmlspecialchars($chamado['numero_chamado']) ?>" required>

            <label for="ativo">Ativo</label>
            <input type="text" name="ativo" id="ativo" value="<?= htmlspecialchars($chamado['ativo']) ?>">

            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="3"><?= htmlspecialchars($chamado['descricao']) ?></textarea>

            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo">
                <option <?= $chamado['tipo'] == 'Hardware' ? 'selected' : '' ?>>Hardware</option>
                <option <?= $chamado['tipo'] == 'Software' ? 'selected' : '' ?>>Software</option>
                <option <?= $chamado['tipo'] == 'Rede' ? 'selected' : '' ?>>Rede</option>
            </select>

            <label for="status">Status</label>
            <select name="status" id="status">
                <option <?= $chamado['status'] == 'Em andamento' ? 'selected' : '' ?>>Em andamento</option>
                <option <?= $chamado['status'] == 'Concluído' ? 'selected' : '' ?>>Concluído</option>
                <option <?= $chamado['status'] == 'Pendente' ? 'selected' : '' ?>>Pendente</option>
            </select>

            <label for="responsavel">Responsável</label>
            <input type="text" name="responsavel" id="responsavel" value="<?= htmlspecialchars($chamado['responsavel']) ?>">

            <label for="data_abertura">Data de Abertura</label>
            <input type="date" name="data_abertura" id="data_abertura" value="<?= htmlspecialchars($chamado['data_abertura']) ?>">

            <div class="botoes">
                <button type="submit" class="salvar">💾 Salvar</button>
                <button type="button" class="cancelar"><a href="chamados.php">Cancelar</a></button>
            </div>
        </form>

        <footer class="rodape">
            Desenvolvido pela equipe — <strong>CAI</strong> • Faculdade — <strong>2025</strong>
        </footer>
    </main>

</body>

</html>
