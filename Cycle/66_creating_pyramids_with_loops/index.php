<?php
// Task 1
$str = "";
for ($i=2; $i < 10; $i += 2){
    $str .= "xx";
    echo  $str." ";
}

// Task 2
for ($i=1; $i <= 9; $i++){
    if ($i % 2 != 0){
        for ($j=1; $j <= $i; $j+=2){
            echo $i;
        }
        echo " ";
    }
}

// Task 3
for ($i=10; $i >= 1; $i--){
    if ($i % 2 == 0) {
        $str = "";
        for ($j = 0; $j < $i; $j++) {
            $str .= "x";
        }
        echo $str . " ";
    }
}

// Task 4
for ($i=9; $i>=1; $i--){
    for ($j=1; $j <= $i; $j++){
        echo $i;
    }
    echo " ";
}
