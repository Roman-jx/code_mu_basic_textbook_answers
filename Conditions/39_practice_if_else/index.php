<?php
// Task 1
$month =  5;
if ($month >= 12 and $month <= 2){
    echo "Winter";
} elseif ($month >= 3 and $month <= 5){
    echo "Spring";
} elseif ($month >= 6 and $month <= 8){
    echo "Summer";
} elseif ($month >= 9 and $month <= 11){
    echo  "Autumn";
}

//Task 2
$str = "abcde";
if ($str[0] == "a"){
    echo "Valid";
} else {
    echo "No valid";
}

//Task 3
$num = (string)12345;
if ($num[0] == 1 or $num[1] == 2 or $num[2] == 3){
    echo "Valid";
} else {
    echo "No valid";
}

//Task 4
$num = (string)123;
echo $num[0] + $num[1] + $num[2];

//Task 5
$num = (string)123456;
if ($num[0] + $num[1] + $num[2] == $num[3] + $num[4] + $num[5]){
    echo "Valid";
} else {
    echo "No valid";
}