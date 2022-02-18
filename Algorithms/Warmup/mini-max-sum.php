<?php
function miniMaxSum($arr) {
    $min = 0;
    $max = 0;

    sort($arr);
    for($i=0; $i<4; $i++){
        $min += $arr[$i];
    }

    rsort($arr);
    for($i=0; $i<4; $i++){
        $max += $arr[$i];
    }

    echo $min." ".$max;
}
?>