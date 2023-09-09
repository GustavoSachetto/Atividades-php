<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exibindo numero dicimal e numero inteiro</title>
    </head>
    <body>
        <header>
            <h1>Digite um numero:</h1>
        </header>
        <section>
            <form action="recebe.php" method="post">
                <label for="numero">Digite um numero decimal:</label>
                <input type="number" step="0.001" name="numero" placeholder="numero">
                <button type="submit">Enviar</button>
            </form>
        </section>
    </body>
</html>