<?php
function diagonalDifference($arr)
{
    $x = 0;
    $y = 0;

    $arrc = count($arr);
    $i2 = 1;
    for ($i = 0; $i < $arrc; $i++) {
        $x += $arr[$i][$i];
        $y += $arr[$i][$arrc - $i2];
        $i2++;
    }
    return abs($x - $y);
}

?>