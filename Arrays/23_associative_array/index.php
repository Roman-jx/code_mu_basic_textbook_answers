<?php
//Task 1
$arr = [
    1 => "a",
    2 => "b",
    3 => "c"
];
var_dump($arr);

//Task 2
$arr = [
    1 => "Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
];
var_dump($arr);

//Task 3
$user = [
    "name" => "Ivan",
    "surname" => "Ivanov",
    "patronymic" => "Ivanovych"
];
var_dump($user);

//Task 4
$date = [
    "year" => 2003,
    "month" => 2,
    "day" => 10
];
echo "{$date['year']}-{$date['month']}-{$date['day']}";