<?php
function longestRepetition($s) {
    if ($s === "") {
        return ["", 0];
    }
    $char = $s[0];
    $max = 1;
    $count = 1;
    for ($i = 1; $i < strlen($s); $i++) {
        if ($s[$i]=== $s[$i - 1]) {
            $count++;
        } else {
            $count = 1;
        }
        if ($count > $max) {
            $max = $count;
            $char = $s[$i];
        }
    }
    return [$char, $max];
}