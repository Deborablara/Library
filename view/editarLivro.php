<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
    <title>Editar</title>
</head>
<body>
    <div class="img">
        <img src="../img/livros.jpeg" alt="livros">
    </div>

    <main class="flex-container">
        <nav>
            <ul>
                <li><a href="./listarLivros.php">Livros cadastrados</a></li>
                <li><a  href="./index.php">Cadastrar livro</a></li>
 
            </ul>
        </nav>
        <h1>Editar</h1>
        <div class="div-form">

            <?php
                include '../control/crudLivro.php';

                $codigo = $_GET["codigo"];
                $resultado = mostrarLivroAlterar($codigo);
                $resultadoSeparado=mysqli_fetch_assoc($resultado);

            ?>

            <form method="POST" action="../model/controleLivros.php">

                <div class="input-100">

                        <label for="nome">Nome</label>
                        <br>
                        <input type="text" name="nome" id="nome"value="<?php echo $resultadoSeparado['nome'];?>" >

                </div>
                <div class="input-100">
                        <label for="autor">Nome do Autor</label>
                        <br>
                        <input type="text" name="autor" id="autor" value="<?php echo $resultadoSeparado['autor'];?>">
                </div>
                <input type="hidden" name="codigo" value="<?php echo $resultadoSeparado['codigo'] ?>">

                <div class="div-button">
                    <button type="submit" name="opcao" value="cancelar">Cancelar</button>
                    <button type="submit" name="opcao" value="atualizar" class="atualizar">Atualizar</button>
                    <button type="submit" name="opcao" value="excluir" class="excluir">Excluir</button>
                    
                </div>
            </form>
        </div>
    </main>
    
    
</body>
</html>