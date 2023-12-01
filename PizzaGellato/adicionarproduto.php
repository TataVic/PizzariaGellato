<?php
    $nome_produto              = $_POST['nome_produto'];
    $preco_unitario            = floatval($_POST['preco_unitario']);
    $quantidade_produto        = intval($_POST['quantidade_produto']); 
    $descricao_produto         = $_POST['descricao_produto'];

if(!isset($POST['nome_produto'])){ //checa o método e não permitir incluir após eles
    require  'run.php';
    $produtos = new Produtos();
    $dados->adicionar($nome_produto,$preco_unitario, $quantidade_produto,$descricao_produto);
}

if(isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])){
    $pasta = 'assets/produtos/';
    $arquivo = md5(date('Ymdhis').rand(111,999)).'.'.PATHINFO($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$arquivo);
    $produtos->imagem($ID, $pasta.$arquivo);
}

header("Location: index.php");
exit;
?>