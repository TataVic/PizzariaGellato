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
      .carousel-container  .carousel-inner{
        width: 300px; /* Match the width of the carousel items */
        border: 3px solid #ffefd8;
        box-shadow: 0 0 5px #ffefd8;
        margin: 0;
        
      }
      #carrossel{
        align-items: center;
        justify-content: center;
        
      }
      .carousel-item img {
        object-fit: cover;
      }
      #buttons button{
        background-color: #fbb03b;
      }
    </style>
</head>
<body>
<?php require 'navbar.php'; ?>
<section style="padding-top: 150px; margin-bottom:150px;">
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col" >
    <h2>Descubra uma Experiência Única: Pizzas com Gellato!</h2>
    <p style="text-align: justify;">Bem-vindo à Pizzaria && Gellato, o lugar onde a tradição da pizza se encontra com a deliciosa extravagância do gelato. Explore uma combinação única de sabores e recheios que transformam cada mordida em uma experiência memorável.</p>
    <p style="text-align: justify;">Nossas pizzas cuidadosamente preparadas, combinadas com a suavidade do gelato, são uma explosão de sabor que você não encontrará em nenhum outro lugar da região. Não perca a oportunidade de se deliciar com a culinária que combina a tradição italiana com a criatividade contemporânea.</p>
    <p style="text-align: justify;">Está pronto para uma jornada gastronômica inigualável? Inscreva-se agora e faça seu pedido para experimentar o melhor da Pizzaria && Gellato.</p>
    </div>

    <div class="col carousel slide carousel-container align-items-center" id="carrossel" data-bs-ride="carousel" data-bs-interval="2000" > <!-- Carrossel de imagens -->
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
</div>
<div class="d-grid gap-2 col-6 mx-auto text-center" id="buttons" style="padding-top: 15px;"> <!-- buttons de login | cadastro -->
    <button type="button" class="btn"><strong>Realizar Login</strong></button>
    <button type="button" class="btn"><strong>Realizar Cadastro</strong></button>
</div>
</section>

<footer> <?php require 'footer.php'; ?></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>