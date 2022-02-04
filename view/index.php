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
                <li class="active"><a href="index.php">Cadastrar Livros</a></li>
                <li><a href="listarLivros.php">Listar livros</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex-container">

        <h1>Cadastrar Livro</h1>

        <form method="POST" action="../model/controleLivros.php">

            <div class="input-100">
                <div>
                    <label for="nome">Nome</label>
                </div>
                <div>
                    <input type="text" name="nome" id="nome">
                </div>
            </div>

            <div class="input-100">
                <div>
                    <label for="autor">Nome do Autor</label>
                </div>
                <div>
                    <input type="text" name="autor" id="autor">
                </div>
            </div>

            <div class="div-button">
                <button type="submit" name="opcao" value="cadastrar" class="cadastrar">Cadastrar</button>
            </div>

        </form>

    </main>
    
    
</body>
</html>