<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header>
            <h1>Resultado:</h1>
        </header>
        <main>
            <?php 
                $nome = $_GET["nome"] ?? "sem nome";
                $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

                echo "<p>Bem-vindo! <strong>$nome $sobrenome</strong> esse é meu site!</p>";
            ?>
            <p><a href="index.html">Voltar</a></p>
        </main>
    </body>
</html>