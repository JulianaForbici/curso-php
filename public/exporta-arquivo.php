<?php

$filme = [
    'nome' => $_POST['nome'],
    'ano' => (int) $_POST['ano'],
    'nota' => (float) $_POST['nota'],
    'genero' => $_POST['genero'],
];

$caminhoArquivo = __DIR__ . '/../src/screen-match/filme.json';

file_put_contents(
    $caminhoArquivo,
    json_encode($filme, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

echo "Filme exportado com sucesso!";