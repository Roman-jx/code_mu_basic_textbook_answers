<?php
// Task 1
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $key => $value){
    $arr[$key] += ($arr[$key] * 10) / 100;
}
var_dump($arr);

// Task 2
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $key => $value){
    if ($arr[$key] <= 400) {
        $arr[$key] += ($arr[$key] * 10) / 100;
    }
}
var_dump($arr);

//Task 3
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumKey = 0;
$sumValue = 0;
foreach ($arr as $key => $value ){
    $sumKey += $key;
    $sumValue += $value;
}
echo $sumKey." ".$sumValue;

// Task 4
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrKey = [];
$arrValue = [];
foreach ($arr as $key => $value){
    $arrKey[] = $key;
    $arrValue[] = $value;
}
var_dump($arrKey);
var_dump($arrValue);

// Task 5
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arrNew = [];
foreach ($arr as $key => $value ){
    if (((string)$arr[$key])[0] == "1" or ((string)$arr[$key])[0] == "2"){
        $arrNew[] = $arr[$key];
    }
}
var_dump($arrNew);