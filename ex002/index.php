<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mostrando a data e horario</title>
    </head>
    <body>
        <!-- o ponto concatena o date no comando echo, e mudando as letras do date para maiusculo muda o tipo estilo -->
        <?php 
            // Formatando data para brasil SP
            date_default_timezone_set("America/Sao_Paulo");
            echo "hoje é dia: " . date("d/M/Y"); 
            echo " e a hora atual é: " . date("G:i:s T");
        ?>
    </body>
</html>