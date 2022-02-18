<?php
function compareTriplets($a, $b) {

    $alicePoints = 0;
    $bobPoints = 0;
    foreach($a as $key => $value){
        if($a[$key] > $b[$key]){
            $alicePoints++;
        }
        elseif($b[$key] > $a[$key]) {
            $bobPoints++;
        }
    }

    return array($alicePoints, $bobPoints);

}
?>