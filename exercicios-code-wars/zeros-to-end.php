<?php
function moveZeros(array $items): array
{
    $result=[];
    $count = 0;

    foreach($items as $item){
        if($item === 0 || $item === 0.0){
            $count++;
        } else{
            $result[] = $item;
        }
    }

    for($i = 0; $i < $count; $i++){
        $result[] = 0;
    }
    return $result;
}