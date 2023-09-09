<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos primitivos PHP</title>
    </head>
    <body>
        <h1>Teste de tipos primitivos</h1>
        <?php 
            // Todo numero declarado tem que ser fora das aspas

            // 0x = hexadecimal 0b = binario 0 octal = octal

            $binario = 0b100;
            $hexadecimal = 0xF1F1F1;
            $octal = 0100;
            echo "Tipos numericos:<br> $binario binario <br> $hexadecimal hexadecimal <br> $octal octal <br><br>";
            
            echo "var_dump: <br>";
            $v = true;
            // Mostra o tipo da variavel e a variavel na tela
            var_dump($v);

            echo"<br>";
            //coerção
            $num = (float)"4050";
            var_dump($num);
            
            echo"<br>";
            $vetor = [4, 2.5, true, "Gustavo", 10];
            var_dump($vetor);
            
            class Pessoa{
                private string $nome;
            }
            
            echo"<br><br>";
            $p = new Pessoa;
            var_dump($p);
        ?>
    </body>
</html>