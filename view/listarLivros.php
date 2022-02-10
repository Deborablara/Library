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
 
        <section>
            <table>
                <caption>Livros Cadastrados</caption>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Autor</th>
                        <th>Opção</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../control/crudLivro.php';
                                            
                                            
                        $resultado = listarLivros();
                        if($resultado){
                            while($resultadoSeparado = mysqli_fetch_assoc($resultado)){
                                echo "
                                    <tr>
                                        <td>$resultadoSeparado[codigo]</td>
                                        <td>$resultadoSeparado[nome]</td>
                                        <td>$resultadoSeparado[autor]</td>
                                        <td><a href='editarLivro.php?codigo=$resultadoSeparado[codigo]' class='button-editar'>
                                                Editar
                                            </a>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>
        <a href="./index.php">Voltar</a>
    </main>
    
</body>
</html>