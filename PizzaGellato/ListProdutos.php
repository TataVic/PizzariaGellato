<?php 
  require 'run.php';
  $produtos = new Produtos();
  $produtos = $produtos->getAll(); 
?>
<html>
<?php require "head.php";?>
 <body style=" background-color: #f9d69e;">
 <?php require "navbar.php";?>

 <div class="container mt-5" style="padding-top: 90px;">
  <div class="text-center" id="titulo-login"> 
    <h2>Lista dos Produtos Cadastrados</h2>
  </div>
  <div class="row">
    <?php foreach ($produtos as $produto) : ?>
      <div class="col-md-4 mb-4">
        <div class="card">
        <?php 
          if (!empty($produto['imagem'])) {
            echo '<img src="assents/css/images/temporario'. $produto['imagem'].'" class="card-img-top img-fluid" alt="Imagem do Produto">';
          } else {
            echo '<img src="assents/css/images/imagem_default.png" class="card-img-top img-fluid" alt="Imagem Padrão">';
          }
        ?>
          <div class="card-body  d-flex flex-column align-items-center">
            <h5 class="card-title"><?php echo $produto['nome_produto']; ?> </h5> <!-- Nome do Produto -->
            <p class="card-text">
              Descrição: <?php echo $produto['descricao_produto']; ?> <!-- Descrição do produto -->
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> Quantidade: <?php echo $produto['quantidade_produto']; ?> </li> <!-- Quantidade de produto -->
              <li class="list-group-item"> Preço: <?php echo $produto['preco_unitario']; ?> </li> <!-- Preço do produto -->
            </ul>
              <div class="card-body">
                <a href="excluirproduto.php?ID=<?php echo $produto['ID']; ?>" onclick="return confirm('Deseja excluir esse produto?');" class="btn btn-danger">Excluir</a>
                <a href="carrinho.php" class="btn btn-success">Comprar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>