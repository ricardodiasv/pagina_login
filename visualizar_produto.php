<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Produto</title>
</head>
<body>
    <h1>Visualizar Produto</h1>
    <?php
    if (isset($_GET['produto'])) {
        
        $produtoJson = urldecode($_GET['produto']);
        $produto = json_decode($produtoJson, true);
        
        if ($produto) {
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($produto['nome']) . "</p>";
            echo "<p><strong>Preço:</strong> " . htmlspecialchars($produto['preco']) . "</p>";
            echo "<p><strong>Descrição:</strong> " . htmlspecialchars($produto['descricao']) . "</p>";
        } else {
            echo "<p>Produto inválido.</p>";
        }
    } else {
        echo "<p>Nenhum produto para visualizar.</p>";
    }
    ?>
</body>
</html>
