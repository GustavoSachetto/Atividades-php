<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soma retroalimentado</title>

        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php 
            $valor1 = $_GET['valor1']??0;
            $valor2 = $_GET['valor2']??0;
        ?>
        <main>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="valor1">Digite um valor:</label>
                <input type="number" name="valor1" id="valor1" step="0.01" value="<?= $valor1?>">

                <label for="valor2">Digite outro valor:</label>
                <input type="number" name="valor2" id="valor2" step="0.01" value="<?= $valor2?>">

                <button type="submit">Enviar</button>
            </form>
        </main>
        <section>
            <h2>Resultado da soma</h2>
            <?php 
                $soma = $valor1 + $valor2;
                
                echo "<p> A soma dos valores é igual á: <strong>". number_format($soma, 2, ",", ".") ."</strong></p>";
            ?>
        </section>
    </body>
</html>