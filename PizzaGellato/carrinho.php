<?php

session_start();
require 'run.php';
$produtos = new Produtos();
$produtos = $produtos->getAll();

// Verifica se o usuário está logado
if (!isset($_SESSION['logado'])) {
    echo '<script>
            Swal.fire({
                icon: "warning",
                title: "Faça login para acessar o carrinho.",
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.href = "login.php";
            });
         </script>';
    exit();
}


$precoTotal = 0;

if (isset($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $item) {
        $precoTotal += $item['preco_unitario'] * $item['quantidade_produto'];
    }
}


if (isset($_GET['excluirCarrinho']) && $_GET['excluirCarrinho'] == true) {
    unset($_SESSION['carrinho']);
    header("Location: carrinho.php");
    exit();
} else {
   echo 'Erro ao limpar o carrinho!';
}
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
        
    <ul class="list-group mb-3 justify-contents-center">
        <?php foreach ($produtos as $item): ?>
            <li class="list-group-item py-3 justify-contents-center">
                <div class="row g-3 justify-contents-center">
                    <div class="col-4 col-md-3 col-lg-2">
                        <img src="assents/produtos<?php echo $item['imagem']; ?>"class="card-img-top img-fluid" alt="Imagem do Produto" style="max-height: 150px; max-width: 100%;">
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-lx-8 text-left align-self-center">
                        <h5 class="card-title"><?php echo $item['nome_produto']; ?></h5>
                        <p class="card-text"><?php echo $item['descricao_produto']; ?></p>
                    </div>
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3" id="qtd">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg class="bi" width="16" height="16" fill="currentColor">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </button>
                            <!-- queria pegar a quantidade ao clicar ou no botão de adicionar ou de retirar um produto -->
                            <button type="button" class="btn btn-outline-dark btn-sm">
                            <svg class="bi" width="16" height="16" fill="currentColor">
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                            </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="removerItem(<?php echo $item['ID']; ?>)"> <!-- button de excluir -->
                            <svg class="bi" width="16" height="16" fill="currentColor">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                            </svg>
                            </button>
                        </div>
                        <div class="text-rigth">
                            <p class="text-secondary">Valor do Item: R$ <?php echo number_format($item['preco_unitario'], 2, ',', '.'); ?></p>
                            <p class="text-secondary">Valor Total: R$ <?php  echo number_format($item['preco_unitario'] * $item['quantidade_produto'], 2, ',', '.'); ?></p>
                            <h4><strong>Preço Total: R$<?php echo number_format($precoTotal, 2, ',', '.'); ?></strong></h4>
                            <p class="text-secondary" style="margin: 0px;">Quantidade disponível: <?php echo $item['quantidade_produto']; ?></p>
                            <button class="btn btn-primary-success" onclick="comprarProdutos()">Comprar</button>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
            <a href="removercarrinho.php?excluirCarrinho=true" onclick="return confirm('Deseja limpar seu carrinho e excluir os pedidos?');" class="btn btn-danger" id="excluirCarrinho">Excluir Pedidos</a>
            <button onclick="return confirm('Deseja finalizar a compra?');" class="btn btn-success" id="Compras.php">Finalizar compra</button>
        </ul>
</div>

<?php require "footer.php"?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    function removerItem(ID) {
        window.location.href = 'removercarrinho.php?ID=' + ID;
    }

    function comprarProdutos() {
        window.location.href = 'Compras.php';
    }

    function excluirCarrinho() {
        if (confirm('Deseja limpar seu carrinho?')) {
            window.location.href = 'removercarrinho.php?excluirCarrinho=true';
        }
    }
</script>
</body>