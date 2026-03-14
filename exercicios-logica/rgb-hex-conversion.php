<?php
function rgb($r, $g, $b){
$min = 0;
$max = 255;

$value = max($min, min($max, $r));
$value2 = max($min, min($max, $g));
$value3 = max($min, min($max, $b));

$hexadecimal = strtoupper(str_pad(dechex($value), 2, '0', STR_PAD_LEFT)) .
strtoupper(str_pad(dechex($value2), 2, '0', STR_PAD_LEFT)) .
strtoupper(str_pad(dechex($value3), 2, '0', STR_PAD_LEFT));

var_dump("Debbuging:", ['r' => $r, 'g' => $g, 'b' => $b]);
return $hexadecimal;
}