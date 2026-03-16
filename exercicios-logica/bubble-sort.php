<?php
function bubbleSort($array) {
    $tamanho = count($array);
    for ($i = 0; $i < $tamanho - 1; $i++){
        for ($j = 0; $j < $tamanho - $i - 1; $j++){
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

echo "Digite os números separados por vírgula: ";
$entrada = trim(fgets(STDIN));  
$numeros = array_map('intval', explode(',', $entrada));

$numerosOrdenados = bubbleSort($numeros);
echo "Números ordenados: " . implode(", ", $numerosOrdenados) . "\n";
?>