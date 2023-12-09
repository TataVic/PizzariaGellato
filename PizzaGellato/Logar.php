<?php
    session_start();
    require 'database.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Evite SQL Injection usando prepared statements
    $sql = "SELECT * FROM clientes WHERE email = ? AND senha = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $senha]); // Usar corretamente execute e passar os parâmetros como array
    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    if($results){
        $_SESSION['logado'] = true;
        $_SESSION['ID'] = $results['ID'];
        echo 'Logado com Sucesso!';
        header("Location: ListProdutos.php");
        exit;
    } else {
        echo 'Dados inválidos, verifique seu email ou senha!';
        exit;
    }

    
?>
