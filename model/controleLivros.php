<?php

    include '../control/crudLivro.php';

    $opcao = $_POST["opcao"];

    switch($opcao){
        case 'cadastrar':

            cadastrarLivro($_POST["nome"], $autor = $_POST["autor"]);
            header("Location: ../view/index.php");
        break;

        case 'cancelar':
            header("Location: ../view/listarLivros.php");
        break;

        case 'atualizar':
            alterarLivro($_POST["codigo"], $_POST["nome"], $_POST["autor"]);
            header("Location: ../view/listarLivros.php");
        break;

        case 'excluir':
            excluirLivro($_POST["codigo"]);
            header("Location: ../view/listarLivros.php");

        break;
    }

?>