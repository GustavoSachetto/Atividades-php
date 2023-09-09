<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strings PHP</title>
    </head>
    <body>
        <?php 
            $nome = "Gustavo";
            
            // Aspas dupla o codigo é interpretado
            echo "Seu nome é: $nome";

            echo "<br>";

            // Aspas simples o codigo não é interpretado
            echo 'Seu nome é: $nome';

            const ESTADO = "SP";

            echo "<br>";
            
            // Nas constantes tem que adicionar o operador de concatenação!
            echo "$nome mora no " . ESTADO;  
            
            echo "<br>";
            
            $sobrenome = "Sachetto";
            
            // Aspas duplas nao podem ficar dentro de aspas duplas como colocar aspas duplas dentro do codigo:
            echo "$nome \" Daora \" $sobrenome";
        ?>
    </body>
</html>