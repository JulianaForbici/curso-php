<?php
function fibonacci($n){
    $sequencia = [0, 1];
    for($i = 2; $i < $n; $i++){
        $sequencia[$i] = $sequencia[$i - 1] + $sequencia[$i - 2];
    }
    return $sequencia;
}

echo "Quantos termos de sequencia de Fibonacci você deseja? ";
$termos = (int) fgets(STDIN);

$sequencia = fibonacci($termos);
echo "Sequencia de Fibonacci: " . implode(", ", $sequencia) . "\n";
?>