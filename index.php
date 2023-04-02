<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap Link -->
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        <br>
        <h1> Cadastro de Produtos</h1>
        <br>
        <form action="CRUD/cadastrar_produto.php" method="post">
            <div>
                <label>Nome Produto: </label>
                <input type="text" name="nome_produto">
            </div>
            <div>
                <label>Quantidade do Produto: </label>
                <input type="text" name="qtd_produto">
            </div>
            <div>
                <label>Valor do Produto: </label>
                <input type="text" name="valor_produto">
            </div>
            <div>
                <label>Categoria do Produto: </label>
                <input type="text" name="cat_produto">
            </div>
            <div>
                <button type="submit">Enviar Produtos</button>
                <a href="tabela.php"> Ver Produtos </a>
            </div>
        </form>
    </div>
    <!-- Javascript Bootstrap Link -->
</body>
</html>