<?php
// Task 1
function getNum($arr) {
    return array_sum(array_map("sqrt", $arr));
}
echo getNum([4, 81, 100, 1024]);

// Task 2
function getDivisors(int $num){
    $arr = [];
    for ($i=1; $i <= $num; $i++){
        if ($num % $i == 0) {
            array_push($arr, $i);
        }
    }
    return $arr;
}
var_dump(getDivisors(942));

// Task 3
function delElem($num, $arr){
    $newArr = [];
    for ($i=0; $i<count($newArr); $i++){
        if ($arr[$i] != $num){
             $newArr[] = $arr[$i];
        }
    }
    return $newArr;
}
$res = delElem(5, [1, 9, 2, 4, 5, 5, 2, 5, 0, 0, 5]);
var_dump($res);