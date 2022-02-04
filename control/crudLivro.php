<?php

  include '../control/conectaBD.php';

  function cadastrarLivro($nome, $autor){
      conect();
      query("INSERT INTO livro(nome, autor) VALUES ('$nome', '$autor')");
      close();
    }

    function listarLivros(){
        conect();
        $resultado = query("SELECT * FROM livro");
        close();
        return $resultado;
    }

    function mostrarLivroAlterar($codigo){
        conect();
        $resultado = query("SELECT * FROM livro where codigo = $codigo");
        close();
        return $resultado;
    }

    function alterarLivro($codigo, $nome, $autor){
        conect();
        query("UPDATE livro SET nome = '$nome', autor = '$autor' WHERE codigo = $codigo");
        close();
    }

    function excluirLivro($codigo){
        conect();
        query("DELETE FROM livro where codigo = $codigo");
        close();
    }
?>