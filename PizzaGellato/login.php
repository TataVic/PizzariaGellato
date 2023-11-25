<?php

    session_start();

    if(isset($_POST['usuario'], $_POST['senha'])){
        if($_POST ['usuario'] == 'campo' && $_POST['senha'] == 'senha'){
            header('Location: Cliente.php');
        }
    }