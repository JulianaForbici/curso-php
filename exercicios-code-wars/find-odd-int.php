<?php
function findIt(array $seq) : int {
    $result = 0;

    foreach($seq as $number){
        $result ^= $number;
    }
    return $result;
}