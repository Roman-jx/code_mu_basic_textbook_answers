<?php
// Task 1
$arr = [];
$str = "";
for ($i=1; $i< 5; $i++){
    $str .="xx";
    $arr[] = $str;
}
var_dump($arr);

// Task 2
$arr = [];
for ($i=1; $i <= 5; $i++){
    $str = "";
    for ($j = 0; $j < 5; $j++){
        $str .= $i;
    }
    $arr[] = $str;
}
var_dump($arr);