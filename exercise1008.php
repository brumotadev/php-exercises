<?php

// Escreva um programa que leia o número de um funcionário, seu número de horas trabalhadas, o valor que recebe por hora e calcula o salário desse funcionário. 
// A seguir, mostre o número e o salário do funcionário, com duas casas decimais.

$numeroFuncionario = trim(fgets(STDIN));
$numeroDeHorasTrabalhadas = trim(fgets(STDIN));
$valorPorHora = trim(fgets(STDIN));

$salario = $numeroDeHorasTrabalhadas * $valorPorHora;

printf("NUMBER = %d\n", $numeroFuncionario);
printf("SALARY = U$ %.2f\n", $salario);

?>