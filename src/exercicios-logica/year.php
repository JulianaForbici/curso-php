<?php
function centuryFromYear(int $year) : int {
    if ($year % 100 == 0){
        $year = $year / 100;
    } else {
        $year = ($year / 100) + 1;
    }
    return $year;
}