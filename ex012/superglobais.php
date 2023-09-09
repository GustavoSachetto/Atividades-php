<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Superglobais Exercicio</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <pre>
                <?php
                    setcookie("data", "24-08-2023", time() + 3600);
                    session_start();

                    $_SESSION["teste"] = "Funcionou";

                    // Recebe dados pela url
                    echo '<h1>Superglobal: $_GET</h1>';
                    var_dump($_GET);

                    // Recebe dados ocultos (mas visivel na ferramenta de desenvolvedor)
                    echo '<h1>Superglobal: $_POST</h1>';
                    var_dump($_POST);

                    // Recebe dados enviados pelo get e post
                    echo '<h1>Superglobal: $_REQUEST</h1>';
                    var_dump($_REQUEST);

                    // crias dados armazenados localmente na maquina do usuario por um periodo de tempo
                    echo '<h1>Superglobal: $_COOKIE</h1>';
                    var_dump($_COOKIE);
                    
                    // cria um dado que necessita ser iniciado
                    echo '<h1>Superglobal: $_SESSION</h1>';
                    var_dump($_SESSION);

                    // armazena todos os dados do servidor
                    echo '<h1>Superglobal: $_SERVER</h1>';
                    var_dump($_SERVER);

                    // armazena todos os dados
                    echo '<h1>Superglobal: $GLOBALS</h1>';
                    var_dump($GLOBALS);
                    ?>
            </pre>
        </main>
    </body>
</html>