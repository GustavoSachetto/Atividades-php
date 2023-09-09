<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
    </head>
    <body>
        <?php 
            $numero = $_POST["numero"] ?? 0;
            $inteiro = (int) $numero;
            $decimal =  $numero - $inteiro;

            echo "<p>O valor inteiro desse numero é: " . number_format($inteiro, 0, ". ", ",") . "</p>";
            echo "<p>O valor decimal desse numero é: " . number_format($decimal, 3, ". ", ",") . "</p>";
        ?>
    </body>
</html>