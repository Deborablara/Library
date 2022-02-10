<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/6fb5f06b55.js" crossorigin="anonymous"lefer></script>

    
    <title>Library</title>
</head>
<body>

    <header>
        <h1>My Library</h1>
    </header>

    <main class="flex-container">

        <h2>Editar</h2>

            <?php
                include '../control/crudLivro.php';

                $codigo = $_GET["codigo"];
                $resultado = mostrarLivroAlterar($codigo);
                $resultadoSeparado=mysqli_fetch_assoc($resultado);

            ?>

            <form method="POST" action="../model/controleLivros.php">

                <input type="text" name="nome" id="nome"value="<?php echo $resultadoSeparado['nome'];?>" >
                <br>
                <input type="text" name="autor" id="autor" value="<?php echo $resultadoSeparado['autor'];?>">
                
                <input type="hidden" name="codigo" value="<?php echo $resultadoSeparado['codigo'] ?>">

                <section class="botoes">
                    <button type="submit" name="opcao" value="cancelar">Cancelar</button>
                    <button type="submit" name="opcao" value="atualizar" class="atualizar">Atualizar</button>
                    <button type="submit" name="opcao" value="excluir" class="excluir">Excluir</button>
                    
                </section>
            </form>

    </main>
    
</body>
</html>