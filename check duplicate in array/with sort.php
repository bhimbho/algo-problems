<?php

$arr = [1,2,4,5,6,2,1,7,8,3,9,10];
sort($arr);
$result = [];
for ($i=0; $i < count($arr)-1; $i++) {
    echo $arr[$i].'-'.$arr[$i+1].'<br/>';
    if ($arr[$i] == $arr[$i+1]) {
        echo $arr[$i] . " is duplicate";
        array_push($result, $arr[$i]);
    }
}