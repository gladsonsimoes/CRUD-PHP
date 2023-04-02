<?php
require('../conn.php');

$nome_produto = $_POST['nome_produto'];
$qtd_produto = $_POST['qtd_produto'];
$valor_produto = $_POST['valor_produto'];
$cat_produto = $_POST['cat_produto'];

if (empty($nome_produto) || empty($qtd_produto) || empty($valor_produto) || empty($cat_produto)) {
    echo 'Os valores não podem ser vazios!';
} else {
    $cadastrar = $pdo->prepare("INSERT INTO produtos(nome_produto, qtd_produto, valor_produto, cat_produto) 
    VALUES (:nome_produto , :qtd_produto , :valor_produto , :cat_produto);");
    $cadastrar->execute(
        array(
            ':nome_produto'=> $nome_produto,
            ':qtd_produto'=> $qtd_produto,
            ':valor_produto'=>$valor_produto,
            ':cat_produto'=>$cat_produto
        )
    );
}

echo '<script>
alert("Produto Cadastrado com Sucesso!");
window.location.href="../index.php";
</script>'
    ?>