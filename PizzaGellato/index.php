<?php
    require 'run.php';
  /*   $pessoa = new Cliente();
    $dados = $pessoa->getAll(); */
?>
  <?php require 'head.php'; ?>
  

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
      #navbar{
        border-top: 5px solid #fbb03b;
        padding-top: 0;
        margin: 0;
      }
      .container-fluid{
        background-color: #e68b8b;
        padding: 0;
        margin: 0;
        padding-top: 0;
      }
      .navbar{
        padding-top: 0;
      }
      .navbar h1{
        font-family: 'Ephesis', sans-serif;
        margin: 0;
        padding: 0;
      }
      .progress-container {
            height: 5px;
            position: relative;
            width: 100%;
            background-color: #ddd;
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background-color: #4CAF50;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" id="diamante_menu"><img src="assents/css/images/pizzaria.png"  style="width: 250px; padding: 0; margin:0;" alt="Pizzaria & Gellato"></a>
    <a class="navbar-brand" href="#"><h1><strong>Pizzaria && Gellato</strong></h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre nós</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a class="dropdown-item" href="#">Pizzas & Gellato</a></li>
            <li><a class="dropdown-item" href="#">Gellatos</a></li>
            <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="#">Cadastrar o produto</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                <button class="btn btn-outline" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg></button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col">
        <h2>Já imaginou pizzas com gellato?</h2>
        <p>Você encontra aqui na pizzaria && Gellato os melhores sabores e recheios de pizza da região todinha!</p>
        <p>Não perca essa oportunidade, se increva agora e faça seu pedido.</p>
    </div>
    <div class="col">
      <img src="assents/css/images/carrosel/pizza_sorvete.jpeg">
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>