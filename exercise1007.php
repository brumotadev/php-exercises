<?php 

/**
 * Leia quatro valores inteiros A, B, C e D. 
 * A seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D 
 * segundo a fórmula: DIFERENCA = (A * B - C * D).
 * 
 */

 $valorA = trim(fgets(STDIN));
 $valorB = trim(fgets(STDIN));
 $valorC = trim(fgets(STDIN));
 $valorD = trim(fgets(STDIN));

 $diferenca = (($valorA * $valorB) - ($valorC * $valorD));

 printf("DIFERENCA = %d\n", $diferenca);

?>