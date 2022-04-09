<?php
// Task 1
$arr = [];
for ($i=0; $i<3; $i++){
    for ($j=0; $j<5; $j++){
        $arr[$i][$j] = $j + 1;
    }
}
var_dump($arr);

// Task 2
$arr = [];
for ($i=0; $i<3;$i++){
    for ($j=0; $j < 4; $j++){
        $arr[$i][$j] = "x";
    }
}
var_dump($arr);

// Task 3
$arr = [];
for ($i=0; $i<3; $i++){
    for ($j=0; $j < 2; $j++){
        for ($k=0; $k< 5; $k++){
            $arr[$i][$j][$k] = $k + 1;
        }
    }
}
echo "<pre>";
var_dump($arr);
echo "</pre>";

// Task 4
$arr = [];
for ($i=0, $k=1; $i<4; $i++){
    for ($j=0; $j<2; $j++, $k++){
        $arr[$i][$j] = $k;
    }
}
var_dump($arr);

// Task 5
$arr = [];
for ($i=0, $k=2; $i<4; $i++){
    for ($j=0; $j<3; $j++, $k+=2){
        $arr[$i][$j] = $k;
    }
}
var_dump($arr);

// Task 6
$arr = [];
for ($i=0, $k=1; $i<2; $i++){
    for ($j=0; $j<2; $j++){
        for ($f=0; $f<2; $f++, $k++){
            $arr[$i][$j][$f] = $k;
        }
    }
}
var_dump($arr);

