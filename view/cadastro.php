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

        <h2>Cadastrar Livro</h2>

            <form method="POST" action="../model/controleLivros.php">

                    <input type="text" name="nome" id="nome" placeholder="Nome do livro" required>
                    <br>
                    <input type="text" name="autor" id="autor" placeholder="autor" required>

                    <button type="submit" name="opcao" value="cadastrar">Cadastrar</button>

            </form>

    </main>
    
</body>
</html>