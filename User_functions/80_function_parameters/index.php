<?php
// Task 1
function getCube(int $num){
    echo pow($num, 3);
}
getCube(3);

// Task 2
function getValid(int $num){
    echo $num > 0 ? "+++" : "---";
}
getValid(-9);

// Task 3
function getSum(int $num, $num2){
    echo $num + $num2;
}
getSum(2,3);

// Task 4
function getFullSum(int $n, $n2, $n3){
    echo $n + $n2 + $n3;
}
$param1 = 1;
$param2 = 2;
$param3 = 3;
getFullSum($param1, $param2, $param3);

// Task 5
function func($num = 5){
    echo $num * $num;
}
func(2); //4
func(3); //9
func(); // 25

// Task 6
function func1($num1 = 0, $num2 = 0){
    echo $num1 + $num2;
}
func1(2, 3); // 5
func1(3); // 3
func1(); // 0

