<?php
$nome_produto = $_POST['nome_produto'];
$preco_unitario = floatval($_POST['preco_unitario']);
$quantidade_produto = intval($_POST['quantidade_produto']);
$descricao_produto = $_POST['descricao_produto'];

require 'run.php';
$produtos = new Produtos();
$ID = null;

if (isset($_POST['nome_produto'])) {
    $ID = $produtos->adicionar($nome_produto, $preco_unitario, $quantidade_produto, $descricao_produto);
}
 if(isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])){
    // Pasta onde a imagem será salva
    $pasta = 'assents/produtos';
    // Gera um nome único para o arquivo
    $arquivo = md5(date('Ymdhis').rand(111,999)).'.'.pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    // Move a imagem para a pasta
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$arquivo);
    // Atualiza o caminho da imagem no banco de dados
    $produtos->imagem($ID, $arquivo); 
}
    header("Location: ListProdutos.php");
    exit;
?>
