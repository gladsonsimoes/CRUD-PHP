<?php
require('conn.php');

if (isset($_GET['produto'])) {
    $produto = $_GET['produto'];
} else {
    header("Location: index.php");
}

$tabela = $pdo->prepare("SELECT * FROM produtos WHERE id_produto= :produto;");
$tabela->execute(array(':produto' => $produto));
$rowTabela = $tabela->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>

<body>
    <div>
        <h1>Editar Produto</h1>
        <br>
        <form action="CRUD/UpdateProduto.php" method="post">

            <input type="hidden" name='id_produto' value=<?php echo $rowTabela[0]['id_produto']?>>

            <div>
                <label>Nome do Produto: </label>
                <input type="text" name="nome_produto" value=<?php echo $rowTabela[0]['nome_produto'] ?>>
            </div>
            <div>
                <label>Quantidade do Produto: </label>
                <input type="text" name="qtd_produto" value=<?php echo $rowTabela[0]['qtd_produto'] ?>>
            </div>
            <div>
                <label>Valor Produto: </label>
                <input type="text" name="valor_produto" value=<?php echo $rowTabela[0]['valor_produto'] ?>>
            </div>
            <div>
                <label>Categoria Produto: </label>
                <input type="text" name="cat_produto" value=<?php echo $rowTabela[0]['cat_produto'] ?>>
            </div>
            <br>
            <div>
                <button type="submit" >SALVAR ALTERAÇÔES</button>
                
                <a href="ReadProduto.php" >Tabela Produtos</a>
            </div>
        </form>
    </div>
</body>

</html>