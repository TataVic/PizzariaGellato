<?php
    require 'run.php';

    $cliente = new Clientes();
    $dados = $cliente->getAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php require "head.php"?>
<body style=" background-color: #f9d69e;">
<?php require "navbar.php"?>
<div class="container overflow-hidden" style="padding-top: 110px;">
  <div class="row gy-5 justify-content-center align-items-center">
    <div class="col-4" id="coluna2-cadastro"> <!-- Cadastro -->
      <form  method="POST" action="adicionarcliente.php">
        <div class="text-center" id="titulo-login"> 
          <h2>Faça seu Cadastro</h2>
        </div>
      <div class="mb-3" id="caixas"> <!-- terminar os names -->
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" required>
      </div>
      <div class="mb-3">
        <div class="row">
        <div class="col-md-6" id="caixas">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
      </div>
      <div class="col-md-6" id="caixas">
        <label for="inputPassword" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputPassword" name="senha"placeholder="Senha" required>
      </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row">
        <div class="col-md-6" id="caixas">
        <label for="inputdata" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="inputPassword" name="data_nascimento" >
      </div>
      <div class="col-md-6" id="caixas">
        <label for="inputcpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="inputcpf" name="cpf"  placeholder="CPF: xxx.xxx.xxx-xx" >
      </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row">
            <div class="col-md-6" id="caixas">
            <label for="inputtelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="inputtelefone" name="telefone" placeholder="Telefone / Celular">
          </div>
          <div class="col-md-6" id="caixas">
              <label for="inputendereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="inputendereco" name="endereco"  placeholder="Endereço">
          </div>
        </div>
      </div>
      
      <div class="mb-3">
        <div class="row">
        <div class="col-md-6" id="caixas">
          <label for="inputcidade" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputcidade" name="cidade" placeholder="Cidade">
      </div>
      <div class="col-md-6" id="caixas">
          <label for="inputestado" class="form-label">Estado</label>
          <input type="text" class="form-control" id="inputestado" name="estado" placeholder="Estado">
      </div>
        </div>
      </div>
      
      <div class="mb-3" id="caixas">
              <a href="cadastrocliente.php">Logar-se</a>
      </div>
      <a class="btn btn-secondary" href="index.php">Voltar</a>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </form>
   </div> 
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>