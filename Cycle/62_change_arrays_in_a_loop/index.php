<?php
// Task 1
$arr = [1,2,3,4,5];
$length = count($arr);
for ($i=0; $i <= $length-1; $i++){
    $arr[$i] *= 2;
}
var_dump($arr);

// Task 2
$arr = [1,2,3,4,5];
$length = count($arr)-1;
for ($i=0; $i <= $length; $i++){
    $arr[$i]--;
}
var_dump($arr);

// Task 3
$arr = [1,2,3,4,5];
$length = count($arr)-1;
for ($i=0; $i <= $length; $i++){
    $arr[$i] += 10;
}
var_dump($arr);