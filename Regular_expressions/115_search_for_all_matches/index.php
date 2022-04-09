<?php
// Task 1
$str = "124 feja 9421 hello";
echo preg_match_all("#[0-9]+#", $str);

// Task 2
$str = '2023-10-29 2024-11-30 2025-12-31';
$reg = "#([0-9]+)-([0-9]{1,2})-([0-9]{1,2})#";
preg_match_all($reg, $str, $res);
var_dump($res);
