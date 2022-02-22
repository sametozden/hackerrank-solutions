<?php
function divisibleSumPairs($n, $k, $ar) {
    $pair = 0;

    for($i=0; $i<($n-1); $i++){
        for($j=$i+1; $j<$n; $j++){
            if(($ar[$i] + $ar[$j]) % $k == 0){
                //echo $ar[$i]. "+". $ar[$i2]. "\n";
                $pair++;
            }
        }
    }

    return $pair;
}
?>