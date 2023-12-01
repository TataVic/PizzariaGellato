<?php 
  require 'run.php';
  $produtos = new Produtos();
  $produtos = $produtos->getAll();
?>

<html lang="pt-br">
<link rel="stylesheet" type="text/css" href="style.css">

<?php require "head.php"?>
 <body style=" background-color: #f9d69e;">
 <?php require "navbar.php"?>

 <div class="container overflow-hidden" style="padding-top: 110px;">
  <div class="text-center" id="titulo-login"> 
    <h2>Lista dos Produtos Cadastrados</h2>
  </div>
  <div class="row">
    <?php foreach ($produtos as $produtos) : ?>
      <div class="col-md-4 mb-4">
        <div class="card"  style="width: 18rem;">
        <?php 
          if (!empty($produto['imagem'])) {
            echo '<img src="assents/css/images/temporario/'. $produto['imagem'].'" class="card-img-top img-fluid" alt="Imagem do Produto">';
          } else {
            echo '<img src="assents/css/images/imagem_default.png" class="card-img-top img-fluid" alt="Imagem Padrão">';
          }
        ?>
          <div class="cardy-body">
            <h5 class="card-title"><?php echo $produtos['nome_produto']; ?> </h5> <!-- Nome do Produto -->
            <p class="card-text">
              
            </p>
            
          </div>
        </div>
      </div>
  </div>
  </div>
 </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>