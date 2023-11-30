<?php
    $nome              = $_POST['nome'];
    /* $idade     = intval($_POST['idade']); */
    $email             = $_POST['email'];
    $senha             = $_POST['senha'];
    $data_nascimento   = $_POST['data_nascimento'];
    $cpf               = $_POST['cpf'];
    $telefone          = $_POST['telefone'];
    $endereco          = $_POST['endereco'];
    $cidade            = $_POST['cidade'];
    $estado            = $_POST['estado'];

if(!isset($POST['nome'])){ //checa o método e não permitir incluir após eles
    require  'run.php';
    $cliente = new Clientes();
    $cliente->adicionar($nome, $email, $senha, $data_nascimento, $cpf, $telefone, $endereco, $cidade, $estado);
}

header("Location: index.php");
exit;
?>