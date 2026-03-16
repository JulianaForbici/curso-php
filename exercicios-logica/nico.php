<?php
function nico(string $key, string $message): string
{
    $keyChars = str_split($key);
    $sortedKey = $keyChars;
    sort($sortedKey);
    $order = [];
    foreach ($sortedKey as $char) {
        $order[] = array_search($char, $keyChars);
    }
    $size = strlen($key);
    while (strlen($message) % $size != 0) {
        $message .= " ";
    }
    $result = "";
    for ($i= 0; $i < strlen($message); $i += $size) {
        $block = substr($message, $i, $size);
        foreach ($order as $index) {
            $result .= $block[$index];
        }
    }
    return $result;
}