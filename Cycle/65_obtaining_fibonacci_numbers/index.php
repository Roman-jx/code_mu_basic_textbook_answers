<?php
// Task 1
$f1 = 0;
$f2 = 1;
for ($i=1; $i <=10; $i++){
    $f3 = $f1  + $f2;
    $f1 = $f2;
    $f2 = $f3;
    echo $f3." ";
}

// Task 2
$f1 = 0;
$f2 = 1;
$f3 = 2;
for ($i = 1; $i <= 10; $i++){
    $f4 = $f1 + $f2 + $f3;
    $f1 = $f2;
    $f2 = $f3;
    $f3 = $f4;
    echo $f4." ";
}
