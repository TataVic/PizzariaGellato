<?php
class Clientes extends model{

	public function adicionar($nome, $email, $senha, $data_nascimento, $cpf, $telefone, $endereco, $cidade, $estado){
		$sql = "INSERT INTO clientes (nome, email, senha, data_nascimento, cpf, telefone, endereco, cidade, estado)
		        VALUES (:nome, :email, :senha, :data_nascimento, :cpf, :telefone, :endereco, :cidade, :estado)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome"    			 , $nome);
		$sql->bindValue(":email"    		 , $email);
		$sql->bindValue(":senha"    		 , $senha);
		$sql->bindValue(":data_nascimento"   , $data_nascimento);
        $sql->bindValue(":cpf"    			 , $cpf);
        $sql->bindValue(":telefone"    		 , $telefone);
        $sql->bindValue(":endereco"			 , $endereco);
		$sql->bindValue(":cidade"    	 	 , $cidade);
		$sql->bindValue(":estado"    		 , $estado);
		$sql->execute();

		return $this->db->lastInsertId();
	}

	public function editar($nome, $email, $senha, $data_nascimento, $cpf, $telefone, $endereco, $cidade, $estado){
		$sql = "UPDATE clientes
		           SET nome     		  = :nome
				   	 , email			  = :email
					 , senha			  = :senha
		             , data_nascimento    = :data_nascimento
                     , cpf      		  = :cpf
                     , telefone           = :telefone
                     , endereco 		  = :endereco
                     , cidade 		  	  = :cidade
					 , estado 			  = :estado
		           
		         WHERE ID = :ID";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome"    , $nome);
		$sql->bindValue(":email"    , $email);
		$sql->bindValue(":senha"    , $senha);
		$sql->bindValue(":data_nascimento"   , $data_nascimento);
		$sql->bindValue(":cpf"    , $cpf);
		$sql->bindValue(":telefone"    , $telefone);
		$sql->bindValue(":endereco", $endereco);
		$sql->bindValue(":cidade"    , $cidade);
		$sql->bindValue(":estado"    , $estado);
		$sql->execute();
	}

	public function excluir($ID){
		$sql = "DELETE FROM clientes WHERE ID = :ID";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":ID", $ID);
		$sql->execute();
	}

	public function get($ID){
		$array = array();

		$sql = "SELECT * 
		          FROM clientes
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

		$sql = "SELECT * FROM clientes ORDER BY NOME";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}		

		return $array;
	}
}