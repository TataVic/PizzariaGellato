<?php
$servidor = 'seu_servidor';
$usuario = 'seu_usuario';
$senha = 'sua_senha';
$nomeBanco = 'nome_do_banco';

// Conectar ao MySQL
$conexao = new mysqli($servidor, $usuario, $senha, $nomeBanco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Consulta SQL para criar o banco de dados
$consultaCriarBanco = "CREATE DATABASE IF NOT EXISTS $nomeBanco";

// Executar a consulta
if ($conexao->query($consultaCriarBanco) === TRUE) {
    echo "Banco de dados criado com sucesso";
} else {
    echo "Erro ao criar o banco de dados: " . $conexao->error;
}

// Selecionar o banco de dados
$conexao->select_db($nomeBanco);

// Consulta SQL para criar uma tabela de exemplo
$consultaCriarTabela = "
    CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL
    )";

// Executar a consulta
if ($conexao->query($consultaCriarTabela) === TRUE) {
    echo "Tabela criada com sucesso";
} else {
    echo "Erro ao criar a tabela: " . $conexao->error;
}

// Exemplo de consulta para adicionar um usuário
$nomeUsuario = 'João';
$emailUsuario = 'joao@example.com';

$consultaAdicionarUsuario = "
    INSERT INTO usuarios (nome, email)
    VALUES ('$nomeUsuario', '$emailUsuario')";

if ($conexao->query($consultaAdicionarUsuario) === TRUE) {
    echo "Usuário adicionado com sucesso";
} else {
    echo "Erro ao adicionar o usuário: " . $conexao->error;
}

// Fechar a conexão
$conexao->close();
?>
