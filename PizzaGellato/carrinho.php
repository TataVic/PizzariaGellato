
<?php
require 'run.php';
$produtos = new Produtos();
$produtos = $produtos->getAll();
?>
<html lang="pt-br">

    <!-- utilizado o list group -->
    <?php require "head.php"?>
<body style=" background-color: #f9d69e;padding-top: 90px;">
    <?php require "navbar.php"?>
    <div class="container">
    <div class="text-center" id="titulo-login">
        <h2>Carrinho das compras</h2>
    </div>

    <ul class="list-group mb-3">
        <?php foreach ($produtos as $produto) : ?>
            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                    <img src="assents/produtos<?php echo $produto['imagem']; ?>"class="card-img-top img-fluid" alt="Imagem do Produto" style="max-height: 150px; max-width: 100%;">

                    </div>
                    <div class="col">
                        <!-- Adicione outras informações do produto aqui -->
                        <h5 class="card-title"><?php echo $produto['nome_produto']; ?></h5>
                        <p class="card-text"><?php echo $produto['descricao_produto']; ?></p>
                        <!-- Adicione mais informações conforme necessário -->

                        <!-- Botão para remover o produto do carrinho -->
                        <a href="#" class="btn btn-danger">Remover do Carrinho</a>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php require "footer.php"?>
</body>