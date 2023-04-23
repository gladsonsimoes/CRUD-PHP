<?php
require('../conn.php');

$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$qtd_produto = $_POST['qtd_produto'];
$valor_produto = $_POST['valor_produto'];
$cat_produto = $_POST['cat_produto'];

if (empty($id_produto) || empty($nome_produto) || empty($qtd_produto) || empty($valor_produto) || empty($cat_produto)) {
    echo "Os valores não podem ser vazios";
} else {
    $update_prod = $pdo->prepare("UPDATE produtos set 
        (nome_produto = :nome_produto, 
        qtd_produto = :qtd_produto, 
        valor_produto = :valor_produto, 
        cat_produto = :cat_produto) WHERE id_produto = :id_produto;");

    $update_prod->execute(
        array(
            ':id_produto' => $id_produto,
            ':nome_produto' => $nome_produto,
            ':qtd_produto' => $qtd_produto,
            ':valor_produto' => $valor_produto,
            ':cat_produto' => $cat_produto
        )
    );

    echo "<script>
      alert('Campos Editado Com Sucesso!');
      window.location.href='../ReadProduto.php';
    </script>";
}

?>