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
            $NomeProduto = $item['nome_produto'];
            $quantidadeComprada = $item['quantidade'];
        
            // Verifica se há estoque suficiente
            $resultado = $db->prepare("SELECT quantidade_produto FROM produtos WHERE nome_produto = :nome_produto");
            $resultado->bindParam(':nome_produto', $NomeProduto, PDO::PARAM_STR); 
            $resultado->execute();
        
            if ($resultado === false) {
                throw new Exception("Erro ao executar a consulta SQL.");
            }
        
            $produto = $resultado->fetch(PDO::FETCH_ASSOC);
        
            if (!$produto) {
                throw new Exception("Produto não encontrado: $NomeProduto");
            }
        
            $quantidadeDisponivel = $produto['quantidade_produto'];
        
            if ($quantidadeComprada > $quantidadeDisponivel) {
                throw new Exception("Erro: Não há estoque suficiente para o produto com nome $NomeProduto.");
            }
        
            $novaQuantidade = $quantidadeDisponivel - $quantidadeComprada;
            $atualizarEstoque = $db->prepare("UPDATE produtos SET quantidade_produto = :novaQuantidade WHERE nome_produto = :nome_produto");
            $atualizarEstoque->bindParam(':novaQuantidade', $novaQuantidade, PDO::PARAM_INT);
            $atualizarEstoque->bindParam(':nome_produto', $NomeProduto, PDO::PARAM_STR);
            $atualizarEstoque->execute();
        }

        $db->commit();

        unset($_SESSION['carrinho']);

        echo '<script>alert("Compra efetuada!"); window.location.href = "index.php";</script>';
        exit();
    } catch (Exception $erro) {
        $db->rollBack();
        echo "Erro na transação na compra: " . $erro->getMessage();
        exit();
    }
}
?>
