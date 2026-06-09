<?php
function ePalindromo($texto){
    $textoLimpo = preg_replace("/[^A-Za-z0-9]/", "", strtolower($texto));
    $textoInvertido = strrev($textoLimpo);
    return $textoLimpo === $textoInvertido;
}

echo "Digite um texto para verificar se é um palíndromo: ";
$entrada = trim(fgets(STDIN));
if (ePalindromo($entrada)) {
    echo "O texto é um palíndromo.\n";
} else {
    echo "O texto não é um palíndromo.\n";
}