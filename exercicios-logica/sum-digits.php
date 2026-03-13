<?php
function digital_root($number) : int{
    while($number >=10){
        $sum = 0;
        foreach(str_split($number) as $digit){
            $sum += (int)$digit;
        }
        $number = $sum;
}
return $number;
}