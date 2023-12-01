<?php
class Produtos extends model{

	public function adicionar($nome_produto,$preco_unitario, $quantidade_produto,$descricao_produto){
		$sql = "INSERT INTO produtos (nome_produto, preco_unitario, quantidade_produto, descricao_produto)
		        VALUES (:nome_produto, :preco_unitario, :quantidade_produto, :descricao_produto)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome_produto"         , $nome_produto);
		$sql->bindValue(":preco_unitario"       , $preco_unitario);
        $sql->bindValue(":quantidade_produto"   , $quantidade_produto);
        $sql->bindValue(":descricao_produto"    , $descricao_produto);
		$sql->execute();

		return $this->db->lastInsertId();
	}

        public function imagem($ID, $imagem) {
        $sql = "UPDATE produtos 
                SET imagem = :imagem 
                WHERE ID = :ID";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":imagem", $imagem);
        $sql->bindValue(":ID", $ID);
        $sql->execute();
    }

	public function editar($ID,$nome_produto,$preco_unitario, $quantidade_produto,$descricao_produto){
		$sql = "UPDATE produtos
		           SET nome_produto            = :nome_produto
		             , preco_unitario          = :preco_unitario
                     , quantidade_produto      = :quantidade_produto
                     , descricao_produto       = :descricao_produto
		         WHERE ID = :ID";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome_produto"         , $nome_produto);
		$sql->bindValue(":preco_unitario"       , $preco_unitario);
        $sql->bindValue(":quantidade_produto"   , $quantidade_produto);
        $sql->bindValue(":descricao_produto"    , $descricao_produto);
		$sql->bindValue(":ID", $ID);
		$sql->execute();
	}

	public function excluir($ID){
		$sql = "DELETE FROM produtos WHERE ID = :ID";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":ID", $ID);
		$sql->execute();
	}

	public function get($ID){
		$array = array();

		$sql = "SELECT * 
		          FROM produtos
		         WHERE ID = :ID";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':ID', $ID);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch(\PDO::FETCH_ASSOC);
		}		

		return $array;
	}

	public function getAll(){
		$array = array();

		$sql = "SELECT * FROM produtos ORDER BY nome_produto";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}		

		return $array;
	}
}