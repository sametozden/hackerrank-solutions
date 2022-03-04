<?php
function pageCount($n, $p) {
    $turnfront = 0;
    for($i=1; $i<=$n; $i+=2){
        if($i==$p || $i-1 == $p){
            break;
        }
        $turnfront++;
    }

    $turnback = 0;
    if($n-$p==1 && $n%2!=0){
        return 0;
    }
    $n = ($n%2==0) ? $n+1 : $n;
    for($i=$n; $i>=1; $i-=2){
        if($i == $p || $i-1 == $p){
            break;
        }
        $turnback++;
    }

    return ($turnfront<$turnback) ? $turnfront : $turnback;
}
?>