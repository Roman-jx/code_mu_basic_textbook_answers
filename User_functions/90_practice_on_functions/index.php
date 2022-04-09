<?php
// Task 1
function isP($num1, $num2){
    return array_sum(Div($num1)) === array_sum(Div($num2));
};
function Div($n){
    $arr = [];
    for ($i=1; $i<$n; $i++){
        if ($n % $i == 0){
            $arr[] = $i;
        }
    }
    return $arr;
}
echo isP(15, 33);

// Task 2
function isSame($num1, $num2){
    $arr = [];
    $arr2 = [];
    for ($i=1; $i<1000; $i++){
        if ($num1 % $i == 0){
            $arr[] = $i;
        }
        if ($num2 % $i == 0){
            $arr2[] = $i;
        }
    }
    return array_sum($arr) == array_sum($arr2);
}
echo  isSame(424, 4532);

// Task 3
function isMod($n){
    $sum = 0;
    while ($n != 0){
        $sum += $n % 10;
        $n /= 10;
    }
    return $sum == $n;
}
echo isMod(943);

// Task 4
function isThreePair(int $n){
    $f = (string)$n;
    return ($f[0] . $f[1] . $f[2]) == ($f[3] . $f[4] . $f[5]);
}
echo  isThreePair(123123);

// Task 5
function isS($num1, $num2){
    $arr = [];
    $check = $num1 > $num2 ? $num1 : $num2;
    for ($i=1; $i<$check; $i++){
        if ($num1 % $i == 0 and $num2 % $i == 0){
            $arr[] = $i;
        }
    }
    return $arr;
}
var_dump(isS(225, 483));

