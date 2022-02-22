<?php
function divisibleSumPairs($n, $k, $ar) {
    $pair = 0;

    for($i=0; $i<($n-1); $i++){
        for($i2=$i+1; $i2<$n; $i2++){
            if(($ar[$i] + $ar[$i2]) % $k == 0){
                //echo $ar[$i]. "+". $ar[$i2]. "\n";
                $pair++;
            }
        }
    }

    return $pair;
}
?>