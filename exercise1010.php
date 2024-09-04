<?php

/**
 * Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de peças 2 e o valor unitário de cada peça 2. 
 * Após, calcule e mostre o valor a ser pago.
 */


 $codigoPeca1 = trim(fgets(STDIN));
 $numeroPeca1 = trim(fgets(STDIN));
 $valorUnitarioPeca1 = trim(fgets(STDIN));


 $codigoPeca2 = trim(fgets(STDIN));
 $numeroPeca2 = trim(fgets(STDIN));
 $valorUnitarioPeca2 = trim(fgets(STDIN));


 $totalPecas1 = (int)$numeroPeca1 * (float)$valorUnitarioPeca1;
 $totalPecas2 = (int)$numeroPeca2 * (float)$valorUnitarioPeca2;

 $valorTotal = $totalPecas1 + $totalPecas2;

 printf("VALOR A PAGAR: R$ %.2f\n", $valorTotal);

?>