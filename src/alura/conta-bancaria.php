<?php
$saldo = 1_000.00;
$titular = "juliana";
$opcao = 0;

function menu($saldo,$titular){
    echo "titular : $titular\n";
    echo "saldo atual: R$" . number_format($saldo, 2) . "\n";
    echo "opções:\n";
    echo "1- consultar saldo atual\n";
    echo "2- sacar valor\n";
    echo "3- depositar valor\n";
    echo "4- sair\n";
}
do {
    menu($saldo, $titular);
    echo "escolha uma opção: ";
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "saldo atual: R$" . number_format($saldo, 2) . "\n";
            break;
        case 2:
            echo "digite o valor a sacar: ";
            $valorSacar = (float) fgets(STDIN);
            if ($valorSacar > $saldo) {
                echo "saldo insuficiente!\n";
            } else {
                $saldo -= $valorSacar;
                echo "saque realizado com sucesso!\n";
            }
            break;
        case 3:
            echo "digite o valor a depositar: ";
            $valorDepositar = (float) fgets(STDIN);
            $saldo += $valorDepositar;
            echo "depósito realizado com sucesso!\n";
            break;
        case 4:
            echo "adeus!\n";
            break;
        default:
            echo "ppção inválida!\n";
            break;
    }
} while ($opcao != 4);
?>