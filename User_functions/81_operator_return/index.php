<?php
// Task 1
function getCube(int $num) : int{
    return pow($num, 3);
}
$result =  getCube(4); // 64

// Task 2
function getNum(int $num) : int{
    return sqrt($num);
}
$result = getNum(25) + getNum(16);
echo $result;

// Task 3
function func($num){
    return $num;
    $result = $num * $num;
    return $result;
}
echo func(3); // 3

// Task 4
function func2($num){
    if ($num <= 0){
        return abs($num);
    } else{
        return $num * $num;
    }
}
echo func2(10);
echo func2(-5);

// Task 5
function func3($num){
    if ($num <= 0){
        return abs($num);
    }
    return $num * $num;
}
echo  func3(10); // 100
echo func3(-5); // 5

// Task 6
function func4($num){
    $sum = 0;
    for ($i=1; $i<=$num; $i++){
        $sum += $i;
//        return $sum;
    }
    return $sum;
}
echo func(5); //15

// Task 7
function getDiv($num){
    $iter = 0;
    while ($num > 10){
        $num /= 2;
        $iter ++;
    }
    return $iter;
}
echo getDiv(1234);

// Task 8
function getRes($num1 , $num2){
    if ($num1 > 0 and $num2 > 0){
        return $num1 * $num2;
    } else {
        return $num1 - $num2;
    }
}
echo getRes(3, 4);
