<html>
<link rel="stylesheet" href="stylenavbar.css" />
<html lang="pt-br">
  
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="menu">
  <div class="container-fluid">
      <a class="navbar-brand" id="pizza_img"><img src="assents/css/images/pizzaria.png"  style="width: 150px; padding: 0; margin:0;" alt="Pizzaria & Gellato"></a>
      <a class="navbar-brand" href="#"><h1><strong>Pizzaria && Gellato</strong></h1></a>
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
          <li class="nav-item">
            <a class="nav-link" href="https://w.app/PizzariaGellato">Contato</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Sobre nós</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cadastroproduto.php">Cadastrar o produto</a></li>
            </ul>
          </li>
        </ul>
          <div class="nav-item" id="btn-menu">
            <a href="login.php" id="user"><img src="assents/css/images/usuario.png"></a>
            <a id="carrinho"><img src="assents/css/images/carrinho.png"></a>
          </div>
        
      </div>
    </div>
  </nav>
</html>