<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$nomeBanco = 'pizzariagellato';

// Conectar ao MySQL
$conexao = new mysqli($servidor, $usuario, $senha, $nomeBanco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Consulta SQL para criar a tabela 'compras'
$consultaCriarTabelaCompras = "
    CREATE TABLE IF NOT EXISTS `compras` (
        `ID` int NOT NULL AUTO_INCREMENT,
        `FK_cliente` int NOT NULL,
        `FK_produto` int NOT NULL,
        `quantidade` int NOT NULL,
        `preco_unitario` float NOT NULL,
        `preco_total` float NOT NULL,
        `status_entrega` varchar(3) NOT NULL,
        `metodo_pagamento` varchar(200) NOT NULL,
        `data_compra` date NOT NULL,
        `horas_compra` timestamp(6) NOT NULL,
        `observacao` varchar(100) DEFAULT NULL,
        PRIMARY KEY (`ID`),
        KEY `FK_cliente` (`FK_cliente`),
        KEY `FK_produto` (`FK_produto`)
    )";

// Executar a consulta
if ($conexao->query($consultaCriarTabelaCompras) === TRUE) {
    echo "Tabela 'compras' criada com sucesso\n";
} else {
    echo "Erro ao criar a tabela 'compras': " . $conexao->error . "\n";
}

// Consulta SQL para criar a tabela 'produtos'
$consultaCriarTabelaProdutos = "
    CREATE TABLE IF NOT EXISTS `produtos` (
        `ID` int NOT NULL AUTO_INCREMENT,
        `FK_compras` int NOT NULL,
        `nome_produto` varchar(255) NOT NULL,
        `preco_unitario` float NOT NULL,
        `estoque_qtd` int NOT NULL,
        `categoria_produto` varchar(100) NOT NULL,
        `fornecedor` varchar(100) NOT NULL,
        `data_inclusao` datetime NOT NULL,
        PRIMARY KEY (`ID`),
        KEY `FK_compras` (`FK_compras`)
    )";

// Executar a consulta
if ($conexao->query($consultaCriarTabelaProdutos) === TRUE) {
    echo "Tabela 'produtos' criada com sucesso\n";
} else {
    echo "Erro ao criar a tabela 'produtos': " . $conexao->error . "\n";
}

// Consulta SQL para criar a tabela 'clientes'
$consultaCriarTabelaClientes = "
    CREATE TABLE IF NOT EXISTS `clientes` (
        `ID` int NOT NULL AUTO_INCREMENT,
        `FK_compra` int NOT NULL,
        `nome` varchar(100) NOT NULL,
        `email` varchar(200) NOT NULL,
        `senha` varchar(10) NOT NULL,
        `data_nascimento` date NOT NULL,
        `cpf` int NOT NULL,
        `telefone` int NOT NULL,
        `endereco` varchar(255) NOT NULL,
        `cidade` varchar(200) NOT NULL,
        `estado` varchar(2) NOT NULL,
        PRIMARY KEY (`ID`),
        KEY `FK_compra` (`FK_compra`)
    )";

// Executar a consulta
if ($conexao->query($consultaCriarTabelaClientes) === TRUE) {
    echo "Tabela 'clientes' criada com sucesso\n";
} else {
    echo "Erro ao criar a tabela 'clientes': " . $conexao->error . "\n";
}

// Fechar a conexão
$conexao->close();
?>
