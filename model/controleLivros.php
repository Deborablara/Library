<?php

    include '../control/crudLivro.php';

    $opcao = $_POST["opcao"];

    switch($opcao){
        case 'cadastrar':

            cadastrarLivro($_POST["codigo"], $_POST["nome"], $autor = $_POST["autor"]);
            header("Location: ../view/index.php");
        break;
    }

?>