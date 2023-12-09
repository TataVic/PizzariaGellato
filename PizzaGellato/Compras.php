<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: index.php");
    exit();
}

if (isset($_SESSION['carrinho'])) {
    require 'database.php';

    try {
        $db->beginTransaction();
        
        foreach ($_SESSION['carrinho'] as $item) {
            $NomeProduto = $item['nome'];
            $quantidadeComprada = $item['quantidade'];
        
            // Verifica se há estoque suficiente
            $resultado = $db->prepare("SELECT quantidade_produto FROM produtos WHERE nome_produto = :nome_produto");
            $resultado->bindParam(':nome_produto', $NomeProduto, PDO::PARAM_STR); 
            $resultado->execute();
        
            if ($resultado === false) {
                $db->rollBack();
                echo "Erro ao executar a consulta SQL.";
                exit();
            }
        
            $produto = $resultado->fetch(PDO::FETCH_ASSOC);
        
            if (!$produto) {
                $db->rollBack();
                echo "Produto não encontrado: $NomeProduto";
                exit();
            }
        
            $quantidadeDisponivel = $produto['quantidade_produto'];
        
            if ($quantidadeComprada > $quantidadeDisponivel) {
                $db->rollBack();
                echo "Erro: Não há estoque suficiente para o produto com nome $NomeProduto.";
                exit();
            }
        
            $novaQuantidade = $quantidadeDisponivel - $quantidadeComprada;
            $atualizarEstoque = $db->prepare("UPDATE produtos SET quantidade_produto = :novaQuantidade WHERE nome_produto = :nome_produto");
            $atualizarEstoque->bindParam(':novaQuantidade', $novaQuantidade, PDO::PARAM_INT);
            $atualizarEstoque->bindParam(':nome_produto', $NomeProduto, PDO::PARAM_STR);
            $atualizarEstoque->execute();
        }

        $db->commit();

        unset($_SESSION['carrinho']);

        echo'<script>alert("Compra efetuada!"); window.location.href = "index.php";</script>';
        exit();
    } catch (Exception $erro) {
        $db->rollBack();
        echo "Erro na transação na compra: " . $erro->getMessage();
        exit();
    }
}
?>