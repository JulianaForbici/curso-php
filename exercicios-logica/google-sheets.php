<?php
function getCellAddresses(string $range): array {
    $range = strtoupper(trim($range));
    $parts = explode(':', $range);
    if (count($parts) !== 2) return [];
    $start = $parts[0];
    $end   = $parts[1];
    $startC = $start[0];
    $startR = substr($start, 1);
    $endC = $end[0];
    $endR = substr($end, 1);
    if (!ctype_digit($startR) || !ctype_digit($endR)) return [];
    if ($startC < 'A' || $startC > 'Z') return [];
    if ($endC   < 'A' || $endC   > 'Z') return [];
    if ((int)$startR < 1 || (int)$startR > 1000) return [];
    if ((int)$endR   < 1 || (int)$endR   > 1000) return [];
    if ($start === $end) return [];
    if ($startC > $endC) return [];
    if ((int)$startR > (int)$endR) return [];

    $columns = range($startC, $endC);
    $rows= range((int)$startR, (int)$endR);
    $result = [];

    foreach ($rows as $row) {
        foreach ($columns as $column) {  $result[] = $column . $row;
        }
    }
    return $result;
}