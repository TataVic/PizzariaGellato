<?php
session_start();

if (isset($_GET['ID'])) {
    $idProduto = $_GET['ID'];

    if (!empty($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $index => $item) {
            if ($item['ID'] == $idProduto) {
                $_SESSION['carrinho'][$index]['quantidade_produto']--;

                if ($_SESSION['carrinho'][$index]['quantidade_produto'] == 0) {
                    unset($_SESSION['carrinho'][$index]);
                }

                header("Location: carrinho.php");
                exit();
            }
        }
    }
}
header("Location: carrinho.php");
exit();
?>