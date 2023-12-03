<?php
    $nome_produto              = $_POST['nome_produto'];
    $preco_unitario            = floatval($_POST['preco_unitario']);
    $quantidade_produto        = intval($_POST['quantidade_produto']); 
    $descricao_produto         = $_POST['descricao_produto'];
    
    require  'run.php';
    $produtos = new Produtos();
if(!isset($POST['nome_produto'])){ //checa o método e não permitir incluir após eles
    require  'run.php';
    $produtos = new Produtos();
    $dados = $produtos->adicionar($nome_produto,$preco_unitario, $quantidade_produto,$descricao_produto);
}
    

if(isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])){
    $pasta = 'assets/produtos';
    $arquivo = md5(date('Ymdhis').rand(111,999)).'.'.PATHINFO($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$arquivo);
    $produtos->imagem($ID, $arquivo);
}
/* if(!isset($_POST['nome_produto'], $_POST['preco_unitario'], $_POST['quantidade_produto'], $_POST['descricao_produto'])){
    require  'run.php';
    $produtos = new Produtos();
    $produtosListas = $produtos->getAll($nome_produto,$preco_unitario, $quantidade_produto,$descricao_produto);
} */

header("Location: ListProdutos.php");
exit;
?>