<?php
$nome_produto = $_POST['nome_produto'];
$preco_unitario = floatval($_POST['preco_unitario']);
$quantidade_produto = intval($_POST['quantidade_produto']);
$descricao_produto = $_POST['descricao_produto'];

require 'run.php';
$produtos = new Produtos();

if (isset($_POST['nome_produto'])) {
    $ID = $produtos->adicionar($nome_produto, $preco_unitario, $quantidade_produto, $descricao_produto);
} 
    if (isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])) {
        $pasta = 'assents/produtos/';
        $arquivo = md5(date('Ymdhis') . rand(111, 999)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
// Antes de mover o arquivo
echo 'Caminho antes de mover o arquivo: '. $pasta.$arquivo.'<br>';

// Move o arquivo
move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$arquivo);

// Após mover o arquivo, antes de atualizar o banco de dados
echo 'Caminho após mover o arquivo: ' . $pasta.$arquivo . '<br>';

// Atualiza o banco de dados
$produtos->imagem($ID, $pasta.$arquivo);

        $produtos->imagem($ID, $pasta.$arquivo);
    }
    header("Location: ListProdutos.php");
    exit;
?>
