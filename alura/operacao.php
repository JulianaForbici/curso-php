<?php
function operacao(int $numero1, int $numero2, string $operacao) : float {

    return match($operacao){
        'soma' => $numero1 + $numero2,
    'subtracao' => $numero1 - $numero2,
    'multiplicacao' => $numero1 * $numero2,
    'divisao' => $numero1 / $numero2,
    'fatoriaol' => $numero1 % $numero2,
    'exponencial' => $numero1 ** $numero2,
};
}