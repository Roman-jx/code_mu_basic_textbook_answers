<?php
// Task 1
$str = '2025-12-31';
$reg = "#([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})#";
preg_match($reg, $str, $res);
var_dump($res);

// Task 2
$str = "index.html";
$reg = "#([a-z]+)\.([a-z]{4})#";
preg_match($reg, $str, $res);
var_dump($res);