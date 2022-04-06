<?php
//Task 1
$arr = [
    "a" => 1,
    "b" => 2,
    "c" => 3
];
$arr["a"] = "&";
$arr["b"] = "*";
$arr["c"] = "$";
var_dump($arr);

//Task 2
$arr = [
    "a" => 1,
    "b" => 2,
    "c" =>  3
];
$arr["a"] += 3;
$arr["b"] += 3;
$arr["c"] += 3;
var_dump($arr);

//Task 3
$arr = [
    "a" => 1,
    "b" => 2,
    "c" => 3
];
$arr["a"]++;$arr["a"]++;$arr["b"]--;$arr["c"]--;$arr["c"]--;
var_dump($arr);