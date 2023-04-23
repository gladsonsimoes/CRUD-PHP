<?php 
require('conn.php');

$tabela = $pdo->prepare("SELECT * FROM produtos");
$tabela->execute();
$rowTabela = $tabela->fetchAll();

if(empty($rowTabela)){
    echo '<script>
    alert("Tabela Vazia!");
    window.location.href="index.php";
    </script>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS bootsrap -->
    <title>Tabela de Produtos</title>
</head>
<body>
    <div>
        <h1>Tabela de Produtos</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID PRODUTO</th>
                    <th>NOME PRODUTO</th>
                    <th>QUANTIDADE PRODUTO</th>
                    <th>VALOR PRODUTO</th>
                    <th>CATEGORIA PRODUTO</th>
                    <th>EDITAR </th>
                    <th>EXCLUIR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($rowTabela as $linha){
                    echo '<tr>';
                    echo '<th scope="row">'.$linha['id_produto'].'</th>';
                    echo '<td>'.$linha['nome_produto'].'</td>';
                    echo '<td>'.$linha['qtd_produto'].'</td>';
                    echo '<td>'.$linha['valor_produto'].'</td>';
                    echo '<td>'.$linha['cat_produto'].'</td>';
                    echo '<td><a href=editar_produto.php?produto='.$linha['id_produto'].'> Editar </a></td>';
                    echo '<td><a href=CRUD/DeleteProduto.php?produto='.$linha['id_produto'].'> Excluir </a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="index.php"> Cadastrar Produtos </a>
    </div>
    <!-- Javascript Bootstrap -->
</body>
</html>