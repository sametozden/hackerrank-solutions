<?php
function gradingStudents($grades) {
    $newGrades = array();

    foreach($grades as $g){
        if($g < 38 ){
            $newGrades[] = $g;
            continue;
        }

        $mod = $g % 5;
        if($mod > 2){
            $gNew = $g - $mod;
            $newGrades[] = $gNew + 5;
        }
        else {
            $newGrades[] = $g;
        }

    }

    return $newGrades;

}
?>