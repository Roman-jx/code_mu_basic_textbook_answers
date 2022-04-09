<?php
// Task 1
function getArray($arr) {
    foreach ($arr as $i){
        if ($i % 2 != 0){
            return false;
        }
    }
    return true;
}
var_dump(getArray([1,2,3,4,5,6, 7]));

// Task 2
function checkNum($num){
    while ($num > 10){
        $res = $num % 10;
        if ($res % 2 == 0){
            return false;
        }
        $num /= 10;
    }
    return true;
}
echo checkNum(1357);

// Task 3
function Arr($arr){
    for ($i=1; $i<count($arr); $i++){
        if ($arr[$i-1] == $arr[$i]){
            return true;
        }
    }
    return false;
}
echo Arr([1,2,3,4,4,5]);
