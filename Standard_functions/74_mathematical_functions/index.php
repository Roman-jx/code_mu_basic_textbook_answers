<?php
// Task 1
echo  pow(2, 10);

// Task 2
echo sqrt(245);

// Task 3
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $a){
    $sum += pow($a, 2);
}
echo sqrt($sum);

// Task 4
echo round(sqrt(379), 1);
echo  round(sqrt(379), 2);
echo round(sqrt(370), 3);

// Task 5
$f = 0;
$s = 0;
$sf = sqrt(587);
$arr = [
    floor($sf) => "floor",
    ceil($sf) => "ceil",
];
var_dump($arr);

// Task 6
$arr = [4, -2, 5, 19, -130, 0, 10];
echo max($arr)." ".min($arr);

// Task 7
$rNum = mt_rand(1, 100);
echo $rNum;

// Task 8
$arr = [];
for ($i=0; $i<10; $i++){
    $arr[] = mt_rand(1, 100);
}
var_dump($arr);

// Task 9
$a = 5;
$b = -4;
echo  abs($b - $a);
