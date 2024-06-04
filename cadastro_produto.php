<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="salvar_produto.php" method="POST">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="preco">Preço:</label><br>
        <input type="text" id="preco" name="preco"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
