<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Paprika";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

function exibeMensagemLancamento (int $ano) : void
{
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento) : bool{
    return $planoPrime || $anoLancamento < 2020;
}

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

$genero = match ($nomeFilme) {
    "Paprika" => "suspense",
    "I, Tonya" => "slice of life",
    "Marty Supreme" => "ação",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Marty Supreme",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "ação",
];


echo $filme["ano"];
