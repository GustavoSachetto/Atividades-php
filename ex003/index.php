<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variaveis e constantes</title>
    </head>
    <body>
        <?php 
            $nome = "Teste";
            $sobrenome ="001";

            $nome = "Mudando";

            // Metodo para declarar variaveis (indicado)
            $camelCase = "mostrando";
            $snake_case = "mostrando";

            const PAIS = "Brasil";
            
            // Chamar constantes não necessida o $
            echo "Variavies: " . $nome . $sobrenome . "Constantes:" . PAIS;
            echo "<br>Variaveis $nome $sobrenome Constante " . PAIS;
        ?>
    </body>
</html>