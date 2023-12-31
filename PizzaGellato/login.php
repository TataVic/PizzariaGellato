<html lang="pt-br">
    <?php require "head.php"?>
<body style=" background-color: #f9d69e;">
<?php require "navbar.php"?>

<div class="container" style="padding-top: 110px;">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-8 col-md-6 col-sm-12" id="coluna1-login"> <!-- Login -->
        <form class="flex-column d-flex " method="post" action="Logar.php"> 
                <div class="text-center" id="titulo-login"> 
                <h2>Faça seu Login</h2>
                </div>
            <div class="mb-3" id="caixas">
            <label for="inputEmail" class="form-label">Login:</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
            </div>
            <div class="mb-3" id="caixas">
            <label for="inputPassword" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="Senha">
            </div>
            <div class="mb-3" id="caixas-button">
              Ainda não é cadastrado? <a href="cadastrocliente.php">Clique aqui</a> para se cadastrar-se
            </div>
        <button type="submit" class="btn btn-success">Entrar</button>
        <?php
                    if (isset($_SESSION['logado']) && $_SESSION['logado']) {
                        echo '<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>';
                    }
                    ?>
        </form>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>