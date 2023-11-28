<html>
<link rel="stylesheet" href="stylenavbar.css" />
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="menu">
  <div class="container-fluid" >
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
        <!-- <div class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
              <button class="btn btn-outline" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg></button>
          </form>
        </div> -->
          <div class="nav-item">
            <a href="cadastro.php"><img src="assents/css/images/usuario.png"></a>
            <a><img src="assents/css/images/carrinho.png"></a>
          </div>
        
      </div>
    </div>
  </nav>
</html>