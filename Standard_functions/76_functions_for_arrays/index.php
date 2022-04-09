<?php
// Task 1
$arr = [1,2,3,4,5];
echo in_array(3, $arr);

// Task 2
$arr = [1,2,3,4,5];
echo array_sum($arr);

// Task 3
$arr = [1,2,3,4,5];
echo array_product($arr);

// Task 4
$arr = [1,2,3,4,5];
echo array_sum($arr) / count($arr);

// Task 5
$arr = range(1, 100);
var_dump($arr);

// Task 6
$arr = range("a", "z");
var_dump($arr);

// Task 7
$arr = implode("-", range(1, 9));
var_dump($arr);

// Task 8
echo array_sum(range(1, 100));

// Task 9
echo  array_product(range(1, 10));

// Task 10
$arr  = [1,2,3];
$arr2 = ["a", "b", "c"];
var_dump(array_merge($arr, $arr2));

// Task 11
$arr = [1,2,3,4,5];
var_dump(array_slice($arr, 0, 3));

// Task 12
$arr = [1,2,3,4,5];
$n = array_splice($arr, 1, 2);
var_dump($arr);

// Task 13
$arr = [1,2,3,4,5];
$n = array_splice($arr, 1, 3);
var_dump($arr);

// Task 14
$arr = [1,2,3,4,5];
var_dump(array_merge(array_splice($arr, 0, 3), ["a", "b", "c"], $arr));

// Task 15
$arr = [1,2,3,4,5];
var_dump(
    array_merge(
        array_splice($arr, 0, 1),
        ["a", "b"],
        array_slice($arr, 0, 3),
        ["c"],
        array_splice($arr, 3, 1),
        ["e"],
    )
);

// Task 16
$arr = [
    "a" => 1,
    "b" => 2,
    "c" => 3,
];
$key = array_keys($arr);
var_dump($key);

// Task 17
$arr1 = ["a", "b", "c"];
$arr2 = [1,2,3];
var_dump(array_combine($arr1, $arr2));

// Task 20
$arr = [
    "a" => 1,
    "b" => 2,
    "c" => 3,
];
var_dump(array_flip($arr));

// Task 19
$arr = [1,2,3,4,5];
var_dump(array_reverse($arr));

// Task 20
$arr = ["a", "-", "b", "-", "c", "-", "d"];
echo array_search("-", $arr);

// Task 21
$arr = ["a", "-", "b", "-", "c", "-", "d"];
$s = array_splice($arr, array_search("-", $arr), 1);
var_dump($arr);

// Task 22
$arr = ["a", "b", "c", "d", "e"];
var_dump(array_replace($arr, [0 => "!", 3 => "!!"]));

// Task 23
$arr = [
    "3" => "a",
    "1" => "c",
    "2" => "e",
    "4" => "b",
];
sort($arr);
var_dump($arr);

// Task 24
$arr = [
    "a" => 1,
    "b" => 2,
    "c" => 3,
];
echo array_rand($arr);

// Task 25
$arr = [
    "a" => 1,
    "b" => 2,
    "c" => 3,
];
echo $arr[array_rand($arr)];

// Task 26
$arr = [1,2,3,4,5];
shuffle($arr);
var_dump($arr);

// Task 27
$arr = range(1, 25);
shuffle($arr);
var_dump($arr);

// Task 28
$arr = range("a", "z");
shuffle($arr);
var_dump($arr);

// Task 29
$arr = ["a", "b", "c", "d", "e", "f"];
shuffle($arr);
var_dump($arr);

// Task 30
$arr = ["a", "b", "c", "b", "a"];
var_dump(array_unique($arr));

// Task 31
$arr = [1,2,3,4,5];
echo array_shift($arr)." ".array_pop($arr);

// Task 32
$arr = [1,2,3,4,5];
array_unshift($arr, 0);
array_push($arr, 6);
var_dump($arr);

// Task 33
$arr = ["a", "b", "c"];
$arr2 = array_pad($arr, 6, "-");
var_dump($arr2);

// Task 34
$arr = array_fill(0, 10, "x");
var_dump($arr);

// Task 35
$arr = array_chunk(range(1, 20), 5);
var_dump($arr);

// Task 36
$arr = ["a", "b", "c", "b", "a"];
var_dump(array_count_values($arr));

// Task 37
function powNum($a){
    return pow($a, 2);
}
$arr = [1,2,3,4,5];
var_dump(array_map("powNum", $arr));

// Task 38
$arr1 = [1,2,3,4,5];
$arr2 = [3,4,5,6,7];
var_dump(array_intersect($arr1, $arr2));

// Task 39
$arr1 = [1,2,3,4,5];
$arr2 = [3,4,5,6,7];
var_dump(array_diff($arr1, $arr2));

