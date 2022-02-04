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
    <title>Cadastro de Livros</title>
</head>
<body>

    <header class="flex">
        <div class="logo">
            <img src="../img/images-removebg-preview.png" alt="logo site">
        </div>
        
        <nav>
            <ul>
                <li ><a href="index.php">Cadastrar Livros</a></li>
                <li><a href="listarLivros.php">Listar livros</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex-container">

        <h1>Editar</h1>
        <?php
            include '../control/crudLivro.php';

            $codigo = $_GET["codigo"];
            $resultado = mostrarLivroAlterar($codigo);
            $resultadoSeparado=mysqli_fetch_assoc($resultado);

        ?>

        <form method="POST" action="../model/controleLivros.php">

            <div class="input-65">
                <div>
                    <label for="nome">Nome</label>
                </div>
                <div>
                    <input type="text" name="nome" id="nome"value="<?php echo $resultadoSeparado['nome'];?>" >
                </div>
            </div>

            <div class="input-100">
                <div>
                    <label for="autor">Nome do Autor</label>
                </div>
                <div>
                    <input type="text" name="autor" id="autor" value="<?php echo $resultadoSeparado['autor'];?>">
                </div>
            </div>
            <input type="hidden" name="codigo" value="<?php echo $resultadoSeparado['codigo'] ?>">

            <div class="div-button">
                <button type="submit" name="opcao" value="cancelar" class="cancelar">Cancelar</button>
                <button type="submit" name="opcao" value="atualizar" class="atualizar">Atualizar</button>
                <button type="submit" name="opcao" value="excluir" class="excluir">Excluir</button>
                
            </div>

        </form>

    </main>
    
    
</body>
</html>