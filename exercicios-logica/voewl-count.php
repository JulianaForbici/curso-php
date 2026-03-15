<?php
function getCount(string $str): int
{
    $vowels = "aeiou";
    $count = 0;
    for ($i= 0; $i < strlen($str); $i++) {
        if (strpos($vowels, $str[$i]) !== false) {
            $count += 1;
        }
    }
    return $count;
}