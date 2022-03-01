<?php
function pangrams($s) {
    $alphabet = str_split("abcdefghijklmnoprstuvyzxqw");
    $pangram = true;

    foreach($alphabet as $letter){
        if(strpos(strtolower($s), $letter)===false){
            $pangram = false;
            break;
        }
    }

    return ($pangram==true) ? "pangram" : "not pangram";
}
?>