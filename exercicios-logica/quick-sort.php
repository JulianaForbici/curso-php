<?php
function quickSort($array){
    if(count($array) <= 2){
        return $array;
    }
    $pivo = $array[0];
    $esquerda = [];
    $direita = [];

    for ($i = 1; $i < count($array); $i++){
        if ($array[$i] < $pivo){
            $esquerda[] = $array[$i];
        } else {
            $direita[] = $array[$i];
        }
    }
    return array_merge(quickSort($esquerda), [$pivo], quickSort($direita));
}

echo "Digite os números separados por vírgula: ";
$entrada = trim(fgets(STDIN));
$numeros = array_map('intval', explode(',', $entrada));

$numerosOrdenados = quickSort($numeros);
echo "Números ordenados: " . implode(", ", $numerosOrdenados) . "\n";
?>