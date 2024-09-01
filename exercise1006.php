<?php 

/**
 * Leia 3 valores, no caso, variáveis A, B e C, que são as três notas de um aluno. 
 * A seguir, calcule a média do aluno, sabendo que a nota A tem peso 2, a nota B tem peso 3 e a nota C tem peso 5. 
 * Considere que cada nota pode ir de 0 até 10.0, sempre com uma casa decimal.
 */

 $valorA = trim(fgets(STDIN));
 $valorB = trim(fgets(STDIN));
 $valorC = trim(fgets(STDIN));

 $media = (($valorA * 2) + ($valorB * 3) + ($valorC * 5)) / 10;

 printf("MEDIA = %.1f\n", $media);

 

?>