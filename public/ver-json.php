<?php

$caminhoArquivo = __DIR__ . '/../src/screen-match/filme.json';

header('Content-Type: application/json; charset=utf-8');

if (!file_exists($caminhoArquivo)) {
    echo json_encode([
        'erro' => 'Nenhum filme exportado ainda.'
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    exit;
}

echo file_get_contents($caminhoArquivo);