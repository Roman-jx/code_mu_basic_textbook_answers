<?php
// Task 1
$reg = "#[0-9]+\.[1-9]+#";

$arr = [
    "124 fee 12.2",
    "74.42 fe2 921",
    "64.20 hello nw",
];
foreach ($arr as $a){
    echo preg_match($reg, $a)."\n";
}
