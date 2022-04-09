<?php
// Task 1
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $a){
    if ($a % 2 != 0){
        echo $a;
    }
}

// Task 2
$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $a){
    if ($a > 3 and $a < 10){
        echo $a;
    }
}

// Task 3
$arr = [2, 5, -9, -15, 1, 4];
$result = 0;
foreach ($arr as $a){
    if ($a > 0) {
        $result += $a;
    }
}
echo $result;

// Task 4
$arr = [10, 20, 30, 50, 235, 3000];
$result = 0;
foreach ($arr as $a){
    if (((string)$a)[0] == 1 or ((string)$a)[0] == 2 or ((string)$a)[0] == 5){
        $result += $a;
    }
}
echo $result;

// Task 5
$arr = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
foreach ($arr as $a) {
    if ($a[0] == "S"){
        echo "<b>$a</b>";
    }
}

// Task 6
$arr = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
$day = substr(date("l"), 0, 3);
foreach ($arr as $a) {
    if ($a == $day){
        echo "<b>$a</b>";
    }
}



