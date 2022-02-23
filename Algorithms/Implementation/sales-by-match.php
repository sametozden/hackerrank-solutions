<?php
function sockMerchant($n, $ar) {
    $counts = array_count_values($ar);
    $pair = 0;

    foreach($counts as $value){
        $pair += ($value>1) ? floor($value/2) : 0;
    }
    return $pair;
}
?>