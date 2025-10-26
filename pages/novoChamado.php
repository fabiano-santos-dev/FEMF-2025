<?php
include 'conexao.php';

// Se o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = mysqli_real_escape_string($conn, $_POST['numero_chamado']);
    $ativo = mysqli_real_escape_string($conn, $_POST['ativo']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    $tipo = mysqli_real_escape_string($conn, $_POST['tipo']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
    $data = mysqli_real_escape_string($conn, $_POST['data_abertura']);

    // Verificar se campos obrigatórios foram preenchidos
    if (empty($numero) || empty($descricao) || empty($tipo) || empty($status)) {
        echo "<script>alert('Preencha todos os campos obrigatórios!');</script>";
    } else {
        $sql = "INSERT INTO chamados 
                (numero_chamado, ativo, descricao, tipo, status, responsavel, data_abertura)
                VALUES ('$numero', '$ativo', '$descricao', '$tipo', '$status', '$responsavel', '$data')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Chamado cadastrado com sucesso!'); window.location='chamados.php';</script>";
            exit;
        } else {
            echo "<script>alert('Erro ao salvar: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Chamado - CAI</title>
    <link rel="stylesheet" href="/Projeto_CAI/CSS/chamados.css">
    <link rel="stylesheet" href="/Projeto_CAI/CSS/outros.css">
    <style>
        .form-novo {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
        }

        .form-novo h2 {
            color: #082f57;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-novo label {
            display: block;
            margin-top: 12px;
            color: #082f57;
            font-weight: 500;
        }

        .form-novo input,
        .form-novo select,
        .form-novo textarea {
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
            <h1>➕ Novo Chamado</h1>
            <p>Preencha as informações abaixo</p>
        </header>

        <form class="form-novo" method="POST">
            <h2>Cadastro de Chamado</h2>

            <label for="numero_chamado">Número do Chamado</label>
            <input type="text" name="numero_chamado" id="numero_chamado" placeholder="Ex: CH-2025-300" required>

            <label for="ativo">Ativo</label>
            <input type="text" name="ativo" id="ativo" placeholder="Ex: A-10234">

            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="3" required></textarea>

            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" required>
                <option value="">Selecione...</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Rede</option>
            </select>

            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="">Selecione...</option>
                <option>Em andamento</option>
                <option>Concluído</option>
                <option>Pendente</option>
            </select>

            <label for="responsavel">Responsável</label>
            <input type="text" name="responsavel" id="responsavel">

            <label for="data_abertura">Data de Abertura</label>
            <input type="date" name="data_abertura" id="data_abertura">

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
