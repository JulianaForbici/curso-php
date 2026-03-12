<?php
  
function repeatStr(int $n, string $str): string{

$result = "";

for ($i = 0; $i < $n; $i++) {
  $result .= $str;
}

  return $result;
}