<?php

/**
 * Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de peças 2 e o valor unitário de cada peça 2. 
 * Após, calcule e mostre o valor a ser pago.
 */

 list($codigoPeca1, $numeroPeca1, $valorUnitarioPeca1) = explode(" ", readline());
 list($codigoPeca2, $numeroPeca2, $valorUnitarioPeca2) = explode(" ", readline());

 $valorTotal = ($numeroPeca1 * $valorUnitarioPeca1) + ($numeroPeca2 * $valorUnitarioPeca2);

 printf("VALOR A PAGAR: R$ %.2f\n", $valorTotal);

?>