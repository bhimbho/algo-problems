<?php
$arr = [1,2,4,5,6,2,1,7,8,3,2,9,10];

$result = [];

for ($i=0; $i < count($arr)-1; $i++) {
    //loop to check duplicate
    for ($j=$i+1; $j < count($arr); $j++) {
        if ($arr[$i] == $arr[$j]) {
            array_push($result, $arr[$i]);
        }
    }
}

print_r(array_unique($result));