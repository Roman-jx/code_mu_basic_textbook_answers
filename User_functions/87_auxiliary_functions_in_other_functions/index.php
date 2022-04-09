<?php
// Task 1
function getPrimeDivisors($num){
    $arr = [];
    $divs = getOwnDivisors($num);
    foreach ($divs as $div){
        if (isPrime($div)){
            $arr[] = $div;
        }
    }
    return $arr;
}
function getOwnDivisors($num){
    $arr = [];
    for ($i=1; $i < $num; $i++){
        if ($num % $i == 0){
            $arr[] = $i;
        }
    }
    return $arr;
}
function isPrime($num){
    for ($i=2; $i < $num; $i++){
        if ($num % $i == 0){
            return false;
        }
    }
    return true;
}
var_dump(getPrimeDivisors(1244));