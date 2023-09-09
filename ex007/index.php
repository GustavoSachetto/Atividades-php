<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversor Numeros</title>
    </head>
    <body>
        <?php 
            //Abs remove os sinais e é derivado da palavra absoluto
            $resultado = abs(-600);
            echo "$resultado <br>";
            
            // Base convert converte um numero (254) de uma base(10) para outra(2)
            $resultado = base_convert(254, 10, 2);
            echo "$resultado <br>";
            
            // Arredonda pra cima
            $resultado = ceil(10.5);
            echo "$resultado <br>";

            // Arredonda pra baixo
            $resultado = floor(10.5);
            echo "$resultado <br>";

            // Arredonda pra cima, voce configura quantas casas arredondar
            $resultado = round(10.5, 1);
            echo "$resultado <br>";

            // Divisão inteira nessa divisão ele divide ate não conseguir dividir o numero inteiro mais
            $resultado = intdiv(17, 2);
            echo "$resultado <br>";

            // Mostra o valor minimo de uma sequencia
            $resultado = min(17, 2);
            echo "$resultado <br>";
            
            // Mostra o valor maximo de uma sequencia
            $resultado = max(17, 2);
            echo "$resultado <br>";
            ?>
    </body>
</html>