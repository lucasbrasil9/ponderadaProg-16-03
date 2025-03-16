<?php
require 'db.php';

// Inserir novo registro quando o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'], $_POST['preco'], $_POST['data_criacao'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $dataCriacao = $_POST['data_criacao'];

    $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, data_criacao) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $preco, $dataCriacao]);
    header("Location: index.php");
    exit;
}

// Recuperar registros para exibição
$stmt = $pdo->query("SELECT * FROM produtos ORDER BY data_criacao DESC");
$produtos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastrar Novo Produto</h1>
    <form action="index.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" required>
        <br><br>
        
        <label for="data_criacao">Data de Criação:</label>
        <input type="date" name="data_criacao" id="data_criacao" required>
        <br><br>
        
        <button type="submit">Cadastrar</button>
    </form>

    <h1>Produtos Cadastrados</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($produto['id']); ?></td>
                    <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                    <td><?php echo htmlspecialchars($produto['preco']); ?></td>
                    <td><?php echo htmlspecialchars($produto['data_criacao']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
