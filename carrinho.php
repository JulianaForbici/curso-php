<?php

class Carrinho
{
    public function adicionar(string $produto, int $quantidade): void
    {
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }

        $_SESSION['carrinho'][] = [
            'produto' => $produto,
            'quantidade' => $quantidade,
        ];
    }

    public function listar(): array
    {
        return $_SESSION['carrinho'] ?? [];
    }

    public function limpar(): void
    {
        $_SESSION['carrinho'] = [];
    }
}