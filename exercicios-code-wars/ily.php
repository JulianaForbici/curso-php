<?php
function how_much_i_love_you(int $nb_petals) : string {
    $ily = ['I love you', 'a little', 'a lot', 'passionately', 'madly', 'not at all'];

    if(($nb_petals - 1) % 6 == 0){
        return $ily[0];
    }
    return $ily[($nb_petals - 1) % 6];
}