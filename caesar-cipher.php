<?php
function caesarCipher($s, $k) {
    $alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $cipher = $alphabet;

    for($i=1; $i<=$k; $i++){
        $first = array_shift($cipher);
        $cipher[] = $first;
    }

    $cipherText = "";
    $sLower = strtolower($s);

    for($i=0; $i<strlen($sLower); $i++){

        if(array_search($sLower[$i], $alphabet) !== false){

            $key = array_search($sLower[$i], $alphabet);

            if(ctype_upper($s[$i])){
                $cipherText .= strtoupper($cipher[$key]);
            }
            else {
                $cipherText .= $cipher[$key];
            }

        }
        else {
            $cipherText .= $s[$i];
        }
    }
    return $cipherText;

}
?>
