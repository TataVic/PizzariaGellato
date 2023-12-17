<?php
session_start();

require 'run.php';
$produtos = new Produtos();
$produtos = $produtos->getAll();
?>
<html>
<?php require "head.php";?>

<body style="background-color: #f9d69e;">
    <?php require "navbar.php";?>
    <div class="mb-3 container " style="padding-top: 150px;">
    <div class="text-center" id="titulo-login">
        <h2>Finalização da compra</h2>
    </div>
        <div id="realizarcompra" class="container-fluid" style="padding: 20px;">
        <div class="row">
        <div class="col-md-6" id="caixas">
            <label>Endereço:</label>
            <input type="text" id="enderecoInput" placeholder="Endereço">
        </div>
        <div class="col-md-6" id="caixas">
            <label>Forma de pagamento:</label> <br>
            <label><input type="radio" name="forma_pagamento" value="pix"> PIX</label> <br>
            <label><input type="radio" name="forma_pagamento" value="dinheiro"> Dinheiro</label> <br>
            <label><input type="radio" name="forma_pagamento" value="cartao"> Cartão</label> <br>
            <label><input type="radio" name="forma_pagamento" value="vale_alimentacao"> Vale Alimentação</label> <br>
        </div>
        <button type="submit" class="btn btn-success" onclick="finalizacao()">Finalizar Pedido</button>
    </div>
    </div>
    <script>
        function finalizacao(){
            alert("Compra realizada!");
            document.getElementById("enderecoInput").value = "";
            window.location.href = "ListProdutos.php";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>

</body>

</html>
