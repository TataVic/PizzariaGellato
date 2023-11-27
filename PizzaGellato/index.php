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
      #menu{
        padding: 0;
      }
      .container-fluid{
        background-color: #fbb03b;
        padding: 0;
        margin: 0;
        padding-top: 0;
      }
      .navbar{
        padding-top: 0;
        padding-bottom: 0;
        padding: 0;
        margin: 0;
      }
      .navbar h1{
        font-family: 'Ephesis', sans-serif;
        margin: 0;
        padding: 0;
      }
   
      .carousel-container {
        border: 3px solid #ffefd8; 
        box-shadow: 0 0 10px  #ffefd8; 
        margin: 0 auto;
      }
      .carousel-item img {
        object-fit: cover;
      }
    </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="menu">
    <div class="container-fluid" >
    <a class="navbar-brand" id="pizza_img"><img src="assents/css/images/pizzaria.png"  style="width: 150px; padding: 0; margin:0;" alt="Pizzaria & Gellato"></a>
      <a class="navbar-brand" href="#"><h1><strong>Pizzaria && Gellato</strong></h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cardápio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Sobre nós</a>
          </li> -->
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
      <div class="nav-item">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                  <button class="btn btn-outline" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg></button>
        </form>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
      </div>
      </div>
    </div>
  </nav>
</header>

<section style="padding-top: 200px;">
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col" >
    <h2>Descubra uma Experiência Única: Pizzas com Gelato!</h2>
    <p style="text-align: justify;">Bem-vindo à Pizzaria && Gellato, o lugar onde a tradição da pizza se encontra com a deliciosa extravagância do gelato. Explore uma combinação única de sabores e recheios que transformam cada mordida em uma experiência memorável.</p>
    <p style="text-align: justify;">Nossas pizzas cuidadosamente preparadas, combinadas com a suavidade do gelato, são uma explosão de sabor que você não encontrará em nenhum outro lugar da região. Não perca a oportunidade de se deliciar com a culinária que combina a tradição italiana com a criatividade contemporânea.</p>
    <p style="text-align: justify;">Está pronto para uma jornada gastronômica inigualável? Inscreva-se agora e faça seu pedido para experimentar o melhor da Pizzaria && Gellato.</p>
    </div>

    <div class=" col carousel slide carousel-container"data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assents/css/images/carrosel/pizza_logo.png" alt="pizza da logo">
    </div>
    <div class="carousel-item">
      <img src="assents/css/images/carrosel/pizza_morango.png" alt="">
    </div>
    <div class="carousel-item">
      <img src="assents/css/images/carrosel/pizza_velvet.png" alt="">
    </div>
    <div class="carousel-item">
      <img src="assents/css/images/carrosel/pizzas.png" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assents/css/images/carrosel/pizza_esfiha.png" alt="...">
    </div>
  </div>
    </div>
  </div>
</div>
</section>

<footer> <?php require 'footer.php'; ?></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>