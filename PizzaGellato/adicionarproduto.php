<?php
    $nome_produto              = $_POST['nome_produto'];
    $preco_unitario            = floatval($_POST['preco_unitario']);
    $quantidade_produto        = intval($_POST['quantidade_produto']); 
    $descricao_produto         = $_POST['descricao_produto'];

if(!isset($_POST['nome_produto'])){ //checa o método e não permitir incluir após eles
    require  'run.php';
    $produtos = new Produtos();
    $dados= $produtos->adicionar($nome_produto,$preco_unitario, $quantidade_produto,$descricao_produto);
    if ($dados) {
        // Exiba uma mensagem de sucesso
        echo '<div class="alert alert-success" role="alert">Produto cadastrado com sucesso!</div>';
    } else {
        // Exiba uma mensagem de erro
        echo '<div class="alert alert-danger" role="alert">Erro ao cadastrar o produto. Por favor, tente novamente.</div>';
    }
}
    

if(isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])){
    $pasta = 'assets/produtos/';
    $arquivo = md5(date('Ymdhis').rand(111,999)).'.'.PATHINFO($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$arquivo);
    $produtos->imagem($ID, $pasta.$arquivo);
}

header("Location: ListProdutos.php");
exit;
?>