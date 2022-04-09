<?php
// Task 1
$num = 11;
$flag = true;
for ($i = 2; $i < $num; $i++){
    if ($num % $i == 0){
        $flag = false;
        break;
    }
}

