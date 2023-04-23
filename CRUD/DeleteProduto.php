<?php
    require('../conn.php');

   if( isset($_GET['produto'])){
        $produto = $_GET['produto'];
   }else{
        header("Location: ../index.php");
   }

   $del_prod = $pdo->prepare('DELETE FROM produtos WHERE id_produto=:id_produto;');
   $del_prod->execute(array(':id_produto'=>$produto));  

   echo "<script>
   alert('Usuário Deletado!');
   window.location.href='../ReadProduto.php';
   </script>";
?>
