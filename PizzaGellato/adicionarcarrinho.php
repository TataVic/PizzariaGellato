<?php
require 'run.php';
$produtos = new Produtos();

if (isset($_POST['comprar'])) {
    if (isset($_POST['ID'])) {
        $ID = $_POST['ID'];

        $produto_info = $produtos->get($ID);
        $produto_existente = false;

        if (!empty($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as &$item) {
                if ($item['ID'] == $ID) {
                    $item['quantidade']++;
                    $produto_existente = true;
                    break;
                }
            }
        }

        if (!$produto_existente) {
            $_SESSION['carrinho'][] = [
                'ID' => $produto_info['ID'],
                'nome_produto' => $produto_info['nome_produto'],
                'preco_unitario' => $produto_info['preco_unitario'],
                'quantidade_produto' => 1
            ];
        }

        header("Location: carrinho.php");
        exit();
    } else {
        echo "ID do produto não fornecido.";
    }
} else {
    echo "Parâmetro 'comprar' não enviado.";
}
?>