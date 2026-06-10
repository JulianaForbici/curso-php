<?php

session_start();

require_once 'Carrinho.php';

$carrinho = new Carrinho();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'adicionar') {
        $produto = $_POST['produto'];
        $quantidade = (int) $_POST['quantidade'];

        $carrinho->adicionar($produto, $quantidade);
    }

    if ($acao === 'limpar') {
        $carrinho->limpar();
    }
}

echo json_encode($carrinho->listar());