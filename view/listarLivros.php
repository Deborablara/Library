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
    <title>Livros cadastrados</title>
</head>
<body>

    <header class="flex">
        <div class="logo">
            <img src="../img/images-removebg-preview.png" alt="logo site">
        </div>
        
        <nav>
            <ul>
                <li ><a href="index.php">Cadastrar Livros</a></li>
                <li class="active"><a href="listarLivros.php">Listar livros</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex-container">
        <h1>Livros cadastrados</h1>

        <div>
            <table>
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
        </div>

    </main>



    
    
</body>
</html>