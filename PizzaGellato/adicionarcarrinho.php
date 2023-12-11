<?php
require 'run.php';
$produtos = new Produtos();
session_start();

if (isset($_POST['adicionar'])) {
    if (isset($_POST['ID'])) {
        $ID = $_POST['ID'];

        $produto_info = $produtos->get($ID);
        $produto_existente = false;

        if (!empty($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as &$item) {
                if ($item['ID'] == $ID) {
                    $novo_valor = $_POST['quantidade']; 
                    $item['quantidade'] += $novo_valor;
                    $produto_existente = true;
                   
                    break;
                }
            }
        }

        $quantidade = $_POST['quantidade'];

        if (!$produto_existente) {
           

            $_SESSION['carrinho'][] = [
                'ID' => $produto_info['ID'],
                'imagem' => $produto_info['imagem'],
                'nome_produto' => $produto_info['nome_produto'],
                'preco_unitario' => $produto_info['preco_unitario'],
                'quantidade' => $quantidade
            ];
        }

    }
}
        header("Location: ListProdutos.php");
        exit();
?>