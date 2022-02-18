<?php
function render($number){
    if($number==0){
        sprintf("%0.6f", 0);
    }
    return sprintf("%0.6f", $number);
}

function plusMinus($arr) {
    $count = count($arr);
    $plus = array();
    $minus = array();
    $notr = array();

    foreach($arr as $a){
        if($a > 0){
            $plus[] = $a;
        }
        elseif($a < 0){
            $minus[] = $a;
        }
        else {
            $notr[] = $a;
        }
    }

    echo render(count($plus) / $count)."\n";
    echo render(count($minus) / $count)."\n";
    echo render(count($notr) / $count)."\n";

}
?>