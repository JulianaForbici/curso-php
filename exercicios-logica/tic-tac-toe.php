<?php
function is_solved(array $board): int
{
    for ($i = 0; $i < 3; $i++) {
        $c1 = $board[$i][0];
        $c2 = $board[$i][1];
        $c3 = $board[$i][2];
        if ($c1  !== 0 && $c1 === $c2 && $c2 === $c3) {
            return $c1;  }
    }
    for ($j = 0; $j < 3; $j++) {
        $c1 = $board[0][$j];
        $c2 = $board[1][$j];
        $c3 = $board[2][$j];
        if ($c1  !== 0 && $c1 === $c2 && $c2 === $c3) {
            return $c1;  }
    }
    $c1 = $board[0][0];
    $c2 = $board[1][1];
    $c3 = $board[2][2];
    if ($c1  !== 0 && $c1 === $c2 && $c2 === $c3) {
        return $c1;
    }

    $c1 = $board[0][2];
    $c2 = $board[1][1];
    $c3 = $board[2][0];
    if ($c1  !== 0 && $c1 === $c2 && $c2 === $c3) {
        return $c1;}

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] === 0) {
                return -1;
            }
        }
    }
    return 0;
}