<?php
function staircase($n) {
    for($i=1; $i<=$n; $i++){
        for($i2=$n; $i2>=1; $i2--){
            echo ($i2 > $i) ? " " : "#";
        }
        echo "\n";
    }
}
?>