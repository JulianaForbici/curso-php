<?php
function imc(float $altura, float $peso) : float {
    return $peso / $altura ** 2;
}