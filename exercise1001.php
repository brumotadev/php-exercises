<?php 

// Leia 2 valores inteiros e armazene-os nas variáveis A e B. Efetue a soma de A e B atribuindo o seu resultado na variável X

$valorA = trim(fgets(STDIN));
$valorB = trim(fgets(STDIN));

$soma = $valorA + $valorB;

printf("X = %d\n", $soma);

?>