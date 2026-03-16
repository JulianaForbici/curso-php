<?php
function dirReduc($arr) {
    $result = [];
    for ($i= 0; $i < count($arr); $i++) {
        $dir= $arr[$i];
        if (count($result) > 0) {
            $last = $result[count($result) - 1];
            if (($last === "NORTH" && $dir === "SOUTH") || ($last === "SOUTH" && $dir === "NORTH") ||
                ($last === "EAST" && $dir === "WEST") || ($last === "WEST" && $dir === "EAST")
            ) { array_pop($result);
            } else {
                $result[] = $dir;
            }
        } else {
            $result[] = $dir;
        }
    }
    return $result;
}