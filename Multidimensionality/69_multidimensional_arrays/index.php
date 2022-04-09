<?php
// Task 1
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];
var_dump($arr[3][2]);
var_dump($arr[1][1]);
var_dump($arr[2][0]);
var_dump($arr[0][0]);

// Task 2
$arr = [[1, 2], [3, 4], [5, 6]];
$sum = 0;
foreach ($arr as $a){
    foreach ($a as $item){
        $sum += $item;
    }
}
echo $sum;

// Task 3
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = 0;
foreach ($arr as $a){
    foreach ($a as $item){
        foreach ($item as $i){
            $sum += $i;
        }
    }
}
echo  $sum;

// Task 4
$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];
var_dump($arr["boys"][1]);
var_dump($arr["girls"][2]);

// Task 5
$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];
var_dump($arr["en"]);

// Task 6
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
$sum_salary = 0;
for ($i=0; $i <= count($arr)-1; $i+=2){
    $sum_salary += $arr[$i]["salary"];
}
echo $sum_salary;

// Task 7
$arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
// 55