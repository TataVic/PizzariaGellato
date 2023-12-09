<?php
session_start();

if (isset($_SESSION['logado'])) {
    session_destroy();
    echo '<script>alert("Deslogado com sucesso"); window.location.href = "index.php";</script>';
} else {
    echo '<script>alert("Você não está logado"); window.location.href = "index.php";</script>';
}
?>
