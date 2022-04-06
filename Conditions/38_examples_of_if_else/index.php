<?php
// Task 1
$min = 10;
if ($min >= 0 and $min <= 19){
    echo "1 треть";
} elseif ($min >= 20 and $min <= 39){
    echo "2 треть";
} elseif ($min >= 40 and $min <= 59) {
    echo  "3 треть";
}

//Task 2
$arr = [1, 2, 3, 4, 5, 6];
if (count($arr) >= 3){
    echo "Valid";
}

//Task 3
$num = 5;
if ($num % 2 == 0){
    echo "Even";
} else {
    echo "Odd";
}

//Task 4
$num = 3;
if ($num % 3 == 0){
    echo "Valid";
} else {
    echo "No valid";
}