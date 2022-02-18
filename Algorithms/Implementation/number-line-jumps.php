<?php
function kangaroo($x1, $v1, $x2, $v2) {
    $status = false;
    for($i=1; $i<=10000; $i++){
        $x1 += $v1;
        $x2 += $v2;

        if($x1 == $x2 ){
            return "YES";
            $status = true;
            break;
        }
    }

    if($status == false){
        return "NO";
    }
}
?>