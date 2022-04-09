<?php
// Task 1
$arr = [1,2,3,4,5];
$length = count($arr)-1;
for ($i=0; $i <= $length; $i++){
    echo $arr[$i + 1];
}

// Task 2
$arr = [1,2,3,4,5];
$length = count($arr)-1;
for ($i=0; $i <= $length; $i++){
    echo $arr[$i + 1] + $arr[$i];
}

// Task 3
$arr = [1,2,3,4,5];
$length = count($arr) -1;
for ($i=2; $i<= $length; $i++){
    echo $arr[$i-2];
}

// Task 4
$arr = [1,2,3,4,5];
$length = count($arr) -1;
for ($i=2; $i<= $length; $i++){
    echo $arr[$i-2] + $arr[$i]." ";
}
// Task 5
$arr = [1,2,3,4,5];
$length = count($arr) -1;
for ($i=1; $i<= $length; $i++){
    echo $arr[$i-1] + $arr[$i] + $arr[$i + 1]." ";
}

