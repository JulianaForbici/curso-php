<?php
function calcularMDC($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}

echo "Digite o primeiro número: ";
$num1 = (int) fgets(STDIN);
echo "Digite o segundo número: ";
$num2 = (int) fgets(STDIN);
$mdc = calcularMDC($num1, $num2);
echo "O MDC de $num1 e $num2 é: $mdc\n";