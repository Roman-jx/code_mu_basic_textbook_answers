<?php
// Task 1
$arr = ['a', "b", "c", "d", "e"];
for ($i=0; $i <= count($arr)-1; $i++){
    echo $arr[$i];
}

// Task 2
$arr = ['a', "b", "c", "d", "e"];
for ($i=0; $i <= count($arr)-2; $i++){
    echo $arr[$i];
}

// Task 3
$arr = [1,2,3,4,5,6,7,8];
for ($i=0; $i < count($arr)/2; $i++){
    echo $arr[$i];
}

// Task 4
$arr = [1,2,3,4,5,6,7,8];
$sum = 0;
$length = count($arr);
for ($i=1; $i <= $length-1; $i++){
    $sum += $arr[$i];
}
echo  $sum;