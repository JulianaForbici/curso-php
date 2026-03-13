<?php

echo "Bem-vindo ao screen match!\n";

$nomeFilme = "Paprika";
$anoLancamento = $argv[1] ?? 2006;

$notas = [];

for ($contador = 2; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

if (count($notas) === 0) {
    $notas = [8.7, 9.8, 9.0];
}

$quantidadesNotas = count($notas);
$notaFilme = $quantidadesNotas > 0 ? array_sum($notas) / $quantidadesNotas : 0;

$planoPrime = true;
$incluindoFilmeNoPlano = $planoPrime || $anoLancamento >= 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de lançamento: " . $anoLancamento . "\n";

if ($anoLancamento >= 2025) {
    echo "Filme novo";
} elseif ($anoLancamento >= 2022) {
    echo "Filme meio velho";
} else {
    echo "Filme velho demais";
}

$genero = match ($nomeFilme) {
    "Marty Supreme" => "ação",
    "Past Lives" => "drama",
    "Paprika" => "suspense",
    default => "sem genero"
};

echo "\nGenero: " . $genero . "\n";

$filme = [
    "nome" => "Paprika",
    "genero" => "suspense",
    "ano" => 2006,
    "nota" => 8.5,
];

echo $filme['nome'];