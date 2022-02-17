<?php
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $gotApples = 0;
    $gotOranges = 0;

    foreach($apples as $ai){
        if($ai>0 && $ai >= ($s-$a) && $ai <= ($t-$a) ){
            $gotApples++;
        }
    }

    foreach($oranges as $oi){
        if($oi<0 && $oi >= ($s-$b) && $oi <= ($t-$b) ){
            $gotOranges++;
        }
    }

    echo $gotApples."\n".$gotOranges;

}
?>