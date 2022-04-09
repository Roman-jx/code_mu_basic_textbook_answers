<?php
// Task 1
function recArr($arr){
    foreach ($arr as $item){
        if (is_array($item)){
            recArr($item);
        } else {
            echo $item."\n";
        }
    }
}
recArr([1, 2, 3, [4, 5, [6,7]], [8, [9,10]]]);

// Task 2
function recArr2($arr){
    $sum = 0;
    foreach ($arr as $item){
        if (is_array($item)){
            $sum += recArr2($item);
        } else {
            $sum += $item;
        }
    }
    return $sum;
}
echo recArr2([1, 2, 3, [4, 5, [6,7]], [8, [9,10]]]);

// Task 3
function recStr($arr){
    foreach ($arr as $item){
        if (is_array($item)){
            recStr($item);
        } else {
            echo $item;
        }
    }
}
recStr(["a", ["b", "c", "d"], ["e", "f", ["g", ["j", "k"]]]]);

// Task 4
function powArr($arr){
    $newArr = [];
    foreach ($arr as $item){
        if (is_array($item)){
            powArr($item);
        } else {
            $newArr[] = pow($item, 2);
        }
    }
    return $newArr;
}
var_dump(powArr([1, [2,7,8], [3,4], [5, [6, 7]]]));