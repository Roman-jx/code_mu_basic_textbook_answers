<?php
// Task 1
$day = 20;
if ($day >= 1 and $day <= 31){
    echo "first";
}
if (!($day >= 1 and $day <= 31)){
    echo "second";
}

// Task 2
$day = 20;
if ($day >= 1 and $day <= 31){
    echo "first";
} elseif (!($day >= 1 and $day <= 31)){
    echo "second";
}

// Task 3
$day = 20;
if ($day >= 1 and $day <= 31){
    echo "Valid";
} elseif (!($day >= 1 and $day <= 31)){
    echo "Error";
}

// Task 4
$age = 4;
$num = 3;
$num2 = 4;
if (!($age < 10 or $age > 99)){
    echo "age < 10 or age > 99";
} elseif ($age < 10 or $age > 99){
    $summa = $num + $num2;
    if ($summa <= 9){
        echo "summa <= 9";
    } else {
        echo "summa > 9";
    }
}
