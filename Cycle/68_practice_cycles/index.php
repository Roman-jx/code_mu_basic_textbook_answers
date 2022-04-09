<?php
// Task 1
for ($i=1; $i<=100; $i++){
    echo $i."<br>";
}

// Task 2
for ($i=100; $i>0; $i--){
    echo $i."<br>";
}

// Task 3
for ($i=1; $i<=100; $i++){
    if ($i % 2 == 0){
        echo $i."<br>";
    }
}

// Task 4
$arr = [];
for ($i=0; $i < 10; $i++){
    $arr[] = $i;
}
var_dump($arr);

// Task 5
$arr = [];
for ($i=1; $i<=10; $i++){
    $arr[] = $i;
}
var_dump($arr);

// Task 6
$arr = [2,6,34,12,4,21,42,64,234,3];
foreach ($arr as $a){
    if ($a > 0 and $a < 10){
        echo $a;
    }
}

// Task 7
$flag = false;
$arr = [2, 12, 5, 3, 4, 242, 21];
foreach ($arr as $a){
    if ($a == "5") {
        $flag = true;
        break;
    }
}
echo  $flag;

// Task 8
$arr = [1,4,63,2,52,54];
$sum = 0;
foreach ($arr as $a){
    $sum += $a;
}
echo $sum;

// Task 9
$arr = [1,4,63,2,52,54];
$sum = 1;
foreach ($arr as $a){
    $sum += $a * $a;
}
echo $sum;

// Task 10
$arr = [1,4,63,2,52,54];
$sum = 0;
foreach ($arr as $a){
    $sum += $a;
}
echo $sum/count($arr);

// Task 11
$num = 5;
$fuc = 1;
for ($i=1; $i <= $num; $i++){
    $fuc *= $i;
}
echo  $fuc;