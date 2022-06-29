<?php
function solution ($roman) {
    $number = 0;
    $symbol = [
        'I' => 1,
        // 'IV' => 4,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];
    $roman = str_split($roman);
    for ($i=0; $i < count($roman); $i++) {
        if ($i < count($roman)-1) {
            if ($symbol[$roman[$i]] < $symbol[$roman[$i+1]]) {
                $number += $symbol[$roman[$i+1]] - $symbol[$roman[$i]];
            } else {
                $number += $symbol[$roman[$i]];
            }
        } else {
            $number += $symbol[$roman[$i]];
        }
    }
    return $number;
}

echo solution('MCCCXXXVII');