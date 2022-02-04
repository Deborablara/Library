<?php

  include '../control/conectaBD.php';

  function cadastrarLivro($codigo, $nome, $autor){
      conect();
      query("INSERT INTO livro(codigo, nome, autor) VALUES ($codigo, '$nome', '$autor')");
      close();
    }
?>