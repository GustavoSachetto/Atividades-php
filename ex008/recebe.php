<?php 
    $min = 0;
    $max = 100;
    $resultado = mt_rand($min, $max);
    // rand() = 1951 Linear Congrential Generator
    // mt_rand() = 1997 Mersenne Twister
    // random_int() gera numero aleatorios criptograficamente seguros
    echo "<p>O numero gerado foi: <strong>$resultado</strong></p>";
?>