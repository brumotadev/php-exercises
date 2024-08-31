<?php

// Leia dois valores inteiros, no caso para variáveis A e B. A seguir, calcule a soma entre elas e atribua à variável SOMA. A seguir escrever o valor desta variável.

$valorA = trim(fgets(STDIN));
$valorB = trim(fgets(STDIN));

$soma = $valorA + $valorB;

echo "SOMA = $soma\n";

?>