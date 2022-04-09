<?php
// Task 1
function getDigits($arr){
    return array_sum($arr) / count($arr);
}
function getAvg($num){
    $arr = [];
    for ($i=1; $i < $num; $i++){
        if ($num % $i == 0){
            $arr[] = $i;
        }
    }
    return $arr;
}
var_dump(getDigits(getAvg(2475)));

