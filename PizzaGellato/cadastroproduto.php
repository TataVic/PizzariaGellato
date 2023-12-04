<?php
 require 'run.php';

 $produtos = new Produtos();
 $dados = $produtos->getAll();

?>
<?php require "head.php"?>
<body>
<?php require "navbar.php"?>
<div class="container overflow-hidden" style="padding-top: 110px;">
  <div class="row gy-5 justify-content-center align-items-center">
    <div class="col-4" id="coluna2-cadastro"> <!-- Cadastro -->
      <form  method="POST" action="adicionarproduto.php">
        <div class="text-center" id="titulo-login"> 
          <h2>Cadastro - Produtos</h2>
        </div>
       <div class="p-3">
        <label for="imagem" class="form-label">Imagem/Foto:</label>
        <input class="form-control" type="file" id="imagem" name="imagem" accept="images/*" enctype="multipart/form-data" placeholder="Imagem do Produto">
      </div>
      <div class="p-3" id="caixas"> <!-- terminar os names -->
        <label for="inputNome" class="form-label">Nome do produto:</label>
        <input type="text" class="form-control" id="inputNome" name="nome_produto" placeholder="Nome" required>
      </div>
      <div class="p-3" id="caixas">
        <label for="inputpreco" class="form-label">Preço (R$):</label>
        <input type="text" class="form-control" id="inputpreco" name="preco_unitario"  placeholder="Preço" >
      </div>
      <div class="p-3" id="caixas">
        <label for="inputquantidade" class="form-label">Quantidade: </label>
        <input type="number" class="form-control" id="inputquantidade" name="quantidade_produto" placeholder="Quantidade disponível">
      </div>
      <div class="p-3" id="caixas">
          <label for="inputdescricao" class="form-label">Descrição:</label>
          <input type="text" class="form-control" id="inputdescricao" name="descricao_produto"  placeholder="Descrição do produto">
      </div>
    <!-- data da inclusão ser automatica -->
        <a class="btn btn-secondary" href="index.php">Voltar</a>
        <button type="submit" class="btn btn-success">Cadastrar Produto</button>
      </form>
   </div> 
  </div>
</div>
<?php require "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>