<?php 
function calcularFatorial($n){
    if ($n <= 1) {
        return 1;
    } else {
        return $n * calcularFatorial($n - 1);
    }
}
echo "Digite um número para calcular o fatorial: ";
$numero = (int) fgets(STDIN);
$resultado = calcularFatorial($numero);
echo "O fatorial de $numero é: $resultado\n";
?>