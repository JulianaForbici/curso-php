<?php

echo "Bem-vindo ao screen match!
";

$nomeFilme = "Past Lives";
$anoLancamento = 2021;

$somaDeNotas = 9;
$somaDeNotas += 8.8;
$somaDeNotas += 9;
$somaDeNotas += 7.5;
$somaDeNotas += 8.7;

$notaFilme = $somaDeNotas / 5;
$incluindoFilmeNoPlano = true;

$planoPrime = true;

$incluindoFilmeNoPlano = $planoPrime || $anoLancamento >= 2020;

echo $notaFilme;