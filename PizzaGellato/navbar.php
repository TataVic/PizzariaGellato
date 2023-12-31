<html>
<link rel="stylesheet" href="stylenavbar.css" />
<html lang="pt-br">
  
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="menu">
  <div class="container-fluid">
      <a class="navbar-brand" id="pizza_img"><img src="assents/css/images/pizzaria.png"  style="width: 150px; padding: 0; margin:0;" alt="Pizzaria & Gellato"></a>
      <a class="navbar-brand" href="index.php"><h1><strong>Pizzaria && Gellato</strong></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ListProdutos.php">Cardápio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
            <ul class="dropdown-menu" id="caixa-opcoes">
              <li><a class="dropdown-item" href="cadastroproduto.php">Cadastrar Produtos</a></li>
            </ul>
          </li>
        </ul>
          <div class="nav-item" id="btn-menu">
            <a href="cadastrocliente.php" id="cadastrar"><img src="assents/css/images/add-user.png"></a>
            <a href="login.php" id="user"><img src="assents/css/images/user.png"></a><!--  -->
          <?php
          if (isset($_SESSION['logado']) && $_SESSION['logado']) {
              echo '<a href="deslogar.php" id="logout"><img src="assents/css/images/logout.png"></a>';
          }
          ?>
            <a id="carrinho" href="carrinho.php"><img src="assents/css/images/carrinho.png"></a>
          </div>
        
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>