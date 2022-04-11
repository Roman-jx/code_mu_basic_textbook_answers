<?php
session_start();
// Task 1
echo file_get_contents("1.txt") + file_get_contents("2.txt");

// Task 2
$arr = array_sum([1, 2, 3, 5]);
echo file_put_contents("text.txt", $arr);

// Task 3
$text2 = file_get_contents("text2.txt");
file_put_contents("text2.txt", pow($text2, 2));

// Task 4
if (!isset($_SESSION["count"])){
    $_SESSION["count"] = 0;
} else {
    $count = $_SESSION["count"]++;
    file_put_contents("count.txt", $count);
}

// Task 5
$arr = [
    "1.txt", "2.txt", "3.txt",
];
$new = "";
foreach ($arr as $a){
    $view = file_get_contents($a);
    $new .= " ".$view;
}
file_put_contents("new.txt", $new);