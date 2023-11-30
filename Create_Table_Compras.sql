--
-- Banco de dados: `pizzariagellato`
--
-- --------------------------------------------------------
--
-- Estrutura da tabela `compras`
--

--DROP TABLE IF EXISTS `compras`;
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
) 
--ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--COMMIT;
