<?php
require 'run.php';
$produtos = new Produtos();
$produtos = $produtos->getAll();
?>
<html>
<?php require "head.php";?>

<body style="background-color: #f9d69e;">
    <?php require "navbar.php";?>

    <div class="container mt-5" style="padding-top: 90px;">
        <div class="text-center" id="titulo-login">
            <h2>Lista dos Produtos Cadastrados</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php if (count($produtos) > 0): ?>
                <?php foreach ($produtos as $produto): ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="text-center">
                                    <?php if (!empty($produto['imagem'])): ?>
                                        <img src="assents/produtos<?php echo $produto['imagem']; ?>"class="card-img-top img-fluid" alt="Imagem do Produto" style="max-height: 150px; max-width: 100%;">
                                         <?php else: ?>
                                        <img src="assents/css/images/img_default.png" class="card-img-top img-fluid img-produto" alt="Imagem Padrão" style="max-height: 150px; max-width: 100%;">
                                    <?php endif; ?>
                                </div>
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h5 class="card-title text-center"><?php echo $produto['nome_produto']; ?> </h5>
                                    <!-- Nome do Produto -->
                                    <p class="card-text">
                                        Descrição: <?php echo $produto['descricao_produto']; ?>
                                        <!-- Descrição do produto -->
                                    </p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> Quantidade: <?php echo $produto['quantidade_produto']; ?>
                                        </li>
                                        <!-- Quantidade de produto -->
                                        <li class="list-group-item"> Preço: R$ <?php echo $produto['preco_unitario']; ?>
                                        </li>
                                        <!-- Preço do produto -->
                                    </ul>
                                    <div class="card-body  justify-content-center my-3" style="margin: 5px; padding: 10px;">
                                    <form action="adicionarCarrinho.php" method="post">
                                        <a href="adicionarcarrinho.php?ID=<?php echo $produto['ID']; ?>"
                                            onclick="return confirm('Deseja excluir esse produto?');"
                                            class="btn btn-danger">Excluir</a>
                                        <input type="hidden" name="ID" value="<?php echo $produto['ID'];?>">
                                        <button type="submit" class="btn btn-success" name="comprar">Comprar</button>
                                    </form>        
                                    
                                    
                                 
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<?php require "footer.php"?>
</body>

</html>
