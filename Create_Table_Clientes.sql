--
-- Banco de dados: `pizzariagellato`
--
--
-- Estrutura da tabela `clientes`
--
--DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `FK_compra` int NOT NULL,
  `nome` varchar(100)NOT NULL,
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
) 
--ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--COMMIT;
