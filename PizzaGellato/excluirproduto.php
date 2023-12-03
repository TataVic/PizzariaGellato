<?php
require 'run.php';
require 'Produtos.php';

	$ID = $_GET['ID'];
	if(isset($ID) && !empty($ID)){
        $produtos = new Produtos();
		$produtos->excluir($ID);
	}	

header("Location: ListProdutos.php");
exit;
?>