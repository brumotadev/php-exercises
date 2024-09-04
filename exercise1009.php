<?php

// Faça um programa que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). 
// Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o total a receber no final do mês, com duas casas decimais.

$nomeDoVendedor = trim(fgets(STDIN));
$salarioFixo = trim(fgets(STDIN));
$totalDeVendasMes = trim((fgets(STDIN)));
$comissao = 15/100; // 0.15

$comissao = $totalDeVendasMes * $comissao; // total de vendas * 0.15

$salarioTotalMes = $comissao + $salarioFixo;

printf("TOTAL = R$ %.2f\n", $salarioTotalMes);

?>