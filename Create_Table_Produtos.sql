--
-- Banco de dados: `pizzariagellato`
--
-- --------------------------------------------------------
--
-- Estrutura da tabela `produtos`
--

--DROP TABLE IF EXISTS `produtos`;
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
) 
--ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--COMMIT;
