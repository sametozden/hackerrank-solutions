<?php
function camelcase($s){
    $c = 0;

    for($i=0; $i<strlen($s); $i++){
        if(preg_match("/[A-Z]/", $s[$i])){
            $c++;
        }
    }

    return $c+1;
}
?>