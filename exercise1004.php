<?php
// Leia dois valores inteiros. 
// A seguir, calcule o produto entre estes dois valores e atribua esta operação à variável PROD. 
// A seguir mostre a variável PROD com mensagem correspondente.   

$valorA = trim(fgets(STDIN));
$valorB = trim(fgets(STDIN));

$valorProduto = $valorA * $valorB;

printf("PROD = %d\n", $valorProduto);
?>