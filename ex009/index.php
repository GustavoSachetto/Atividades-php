<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversor de moeda padrão</title>

        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <section>
            <h1>Conversor de moeda</h1>
            <form action="" method="post">
                <p for="numero">Digite um valor em real e o programa irá converter para dolar:</p>
                <!-- o step padroniza um tipo de entrada de dados que devem ser ultilizadas no input number -->
                <input type="number" step="0.01" name="numero" placeholder="R$ Valor" required>
                <button type="submit">Enviar</button>
            </form>
            <?php include ("recebe.php")?>
        </section>
    </body>
</html>