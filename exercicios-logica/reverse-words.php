<?php
function reverseWords($str){
    $reverse = explode(' ', $str);
    foreach ($reverse as &$e){

        $e = strrev($e);
    }
    return implode(' ', $reverse);
}