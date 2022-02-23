<?php
function bonAppetit($bill, $k, $b) {
    $total = 0;
    foreach($bill as $key =>$price){
        if($key!=$k){
            $total += $price;
        }
    }

    if($total/2 == $b){
        echo "Bon Appetit";
    }
    else {
        echo $b-($total/2);
    }

}
?>