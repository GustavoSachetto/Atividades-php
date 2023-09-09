<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Numero aleatorio</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>
            <h1>Clique para gerar um numero:</h1>
            <form action="" method="post">
                <p>Clique no botão para gerar um numero aleatorio de 0 á 100</p>
                <?php include("recebe.php") ?>
                <button type="submit">Novo numero</button>
            </form>
        </section>
    </body>
</html>