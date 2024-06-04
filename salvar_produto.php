<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $produto = array(
        "nome" => $nome,
        "preco" => $preco,
        "descricao" => $descricao
    );

    $produtoJson = json_encode($produto);

    header("Location: visualizar_produto.php?produto=" . urlencode($produtoJson));
    exit();
}
?>
