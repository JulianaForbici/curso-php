<?php

echo "Bem-vindo ao screen match!\n";

$nomeFilme = "Paprika";
$anoLancamento = 2021;

$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 9;
$somaDeNotas += 8.8;
$somaDeNotas += 9;
$somaDeNotas += 7.5;
$somaDeNotas += 8.7;

$notaFilme = $somaDeNotas / 5;
$incluindoFilmeNoPlano = true;

$planoPrime = true;

$incluindoFilmeNoPlano = $planoPrime || $anoLancamento >= 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

if($anoLancamento > 2025){
    echo "Filme novo";
} else if($anoLancamento < 2025 && $anoLancamento >= 2022){
    echo "Filme meio velho";
} else {
    echo "Filme velho demais";
}

$genero = match($nomeFilme) {
    "Marty Supreme" => "ação",
    "Past Lives" => "drama",
    "Paprika" => "suspense",
    default => "sem genero"
};

echo "\nGenero: " . $genero . "\n";

echo $argc . "\n";