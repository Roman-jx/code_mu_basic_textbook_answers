<?php
// Task 1
$arr = [1,2,3,4,5];
echo array_sum($arr) / count($arr);

// Task 2
$arr = range(1, 100);
echo array_sum($arr);

// Task 3
$arr = implode("\n", range(1, 100));
echo $arr;

// Task 4
$arr = range(0, 9);
var_dump($arr);

// Task 5
$arr = [];
for ($i=0; $i < 10; $i++){
    $arr[] = rand(1, 10);
}
var_dump($arr);

// Task 6
$num = 6;
$sum = 1;
for ($i=2; $i <= $num; $i++){
    $sum *= $i;
}
echo $sum;

// Task 7
$n = 9153512;
$sum = 0;
while ($n > 9){
    $s = $n % 10;
    $sum += $s;
    $n /= 10;
}
echo $sum;

// Task 8
echo strrev(ucfirst(strrev("hello")));

// Task 9
$arr = [1, 4, 9, 25, 36];
var_dump(array_map("sqrt", $arr));

// Task 10
$arr = range("a", "z");
$arr2 = range(1, 26);
var_dump(array_combine($arr, $arr2));

// Task 11
$str = "1234567890";
$s = str_split($str, 1);
var_dump(array_sum($s));

// Task 12
$str = "1234567890";
$s = str_split($str, 2);
var_dump(array_sum($s));

// Task 13
$arr = range(1, 9);
$new = array_chunk($arr, 3);
var_dump($new);
