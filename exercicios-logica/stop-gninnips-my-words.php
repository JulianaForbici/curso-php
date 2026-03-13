<?php
function spinWords(string $str): string {
    $reverse = explode(" ", $str);

    foreach($reverse as $i => $r){
        if(strlen($r) >= 5){
            $reverse[$i] = strrev($r);
        }
    }
    return implode(" ", $reverse);
}