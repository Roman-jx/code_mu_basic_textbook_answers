<?php
// Task 1
$arr = [1, 2, 3, 4, 0, 5];
foreach ($arr as $a){
    if ($a == 0){
        break;
    }
}

// Task 2
$arr = [1, 2, 5, -1, 3, 4, 5];
$result = 0;
foreach ($arr as $a){
    if ($a < 0){
        break;
    }
    $result += $a;
}
echo $result;

// Task 3
$arr = [1, 2, 3, 4, 5];
for($i=0, $j=0; $i <= count($arr); $i++, $j++){
    if ($arr[$i] == "3"){
        echo $j;
        break;
    }
}

// Task 4
$count = 0;
$res = 0;
for($i=1; $i <= 100;$i++){
    if ( $res < 100){
        $res += $i;
        $count++;
    }
}
echo $count;
