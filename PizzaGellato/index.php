<?php
 session_start();
 if (!isset($_SESSION['logado'])) {
  // Redireciona para o index.php apenas se não estiver já na página
  if (basename($_SERVER['PHP_SELF']) !== 'index.php') {
      header("Location: index.php");
      exit();
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php require 'head.php'; ?>
    <style>
      .carousel-container  .carousel-inner{
        width: 300px; /* Match the width of the carousel items */
        border: 5px solid #ffefd8;
        box-shadow: 0 0 20px #ffefd8;
        margin: 0;
      }

      .carousel-item img {
        object-fit: cover;
      }
      #buttons .btn{
        background-color: #fbb03b;
      }
      #buttons .btn:hover{
        background-color: #F6BC60;
      }
    </style>
</head>
<body style=" background-color: #f9d69e;">
<?php require 'navbar.php'; ?>
<section style="padding-top: 150px; margin-bottom:150px;">
<div class="container text-center">
  <div class="row justify-content-center align-items-center">
    <div class="col-sm-6" >
    <h2>Descubra uma Experiência Única: Pizzas com Gellato!</h2>
    <p style="text-align: justify;">Bem-vindo à Pizzaria && Gellato, o lugar onde a tradição da pizza se encontra com a deliciosa extravagância do gelato. Explore uma combinação única de sabores e recheios que transformam cada mordida em uma experiência memorável.</p>
    <p style="text-align: justify;">Nossas pizzas cuidadosamente preparadas, combinadas com a suavidade do gelato, são uma explosão de sabor que você não encontrará em nenhum outro lugar da região. Não perca a oportunidade de se deliciar com a culinária que combina a tradição italiana com a criatividade contemporânea.</p>
    <p style="text-align: justify;">Está pronto para uma jornada gastronômica inigualável? Inscreva-se agora e faça seu pedido para experimentar o melhor da Pizzaria && Gellato.</p>
    </div>

    <div class="col-sm-6 carousel slide carousel-container d-flex justify-content-center align-items-center " id="carrossel" data-bs-ride="carousel" data-bs-interval="2000" style="padding-top: 50px;padding-bottom: 10px;"> <!-- Carrossel de imagens -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assents/css/images/carrosel/pizza_logo.png" alt="pizza da logo" class="img-fluid">
        </div>
          <div class="carousel-item">
            <img src="assents/css/images/carrosel/pizza_morango.png" alt="Pizza de morango e sorvete" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="assents/css/images/carrosel/pizza_velvet.png" alt="Pizza Red Velvet" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="assents/css/images/carrosel/pizzas.png" alt="Pizza" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="assents/css/images/carrosel/pizza_esfiha.png" alt="Pizza de estilo esfiha" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto text-center" id="buttons" style="padding-top: 100px; padding-bottom:0px; height:200px;"> <!-- buttons de login | cadastro -->
    <a class="btn justify-content-center align-items-center" href="login.php"><strong>Realizar Login</strong></a> 
    <a class="btn justify-content-center align-items-center" href="cadastrocliente.php"><strong>Realizar Cadastro</strong></a> 
</div>
</section>

<footer> <?php require 'footer.php'; ?></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>