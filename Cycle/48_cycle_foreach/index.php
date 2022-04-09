<?php
// Task 1
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $a){
    echo $a."<br>";
}

// Task 2
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach ($arr as $a){
    $result += $a;
}
echo $result;

// Task 3
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = 0;
foreach ($arr as $a) {
    $result += $a;
}
echo  $result / count($arr);

