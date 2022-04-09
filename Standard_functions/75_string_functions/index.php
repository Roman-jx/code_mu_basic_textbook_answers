<?php
// Task 1
$str = "php";
echo  strtoupper($str);

// Task 2
$str = "PHP";
echo strtolower($str);

// Task 3
$str = "london";
echo ucfirst($str);

// Task 4
$str = "London";
echo lcfirst($str);

// Task 5
$str = "london is the capital of great britain";
echo  ucwords($str);

// Task 7
$str = "html css php";
echo strlen($str);

// Task 8
$password = "123Word1";
echo (strlen($password) > 5 and strlen($password) < 10)  ?  "Valid" :  "Not valid";

// Task 9
$str = "html css php";
$h = substr($str, 0, 4);
$c = substr($str, 5, 3);
$p = substr($str, 9, 3);
echo  $h.$c.$p;

// Task 10
$str = "hello";
echo  substr($str, 2, 3);

// Task 11
$str = "http://google.com";
echo  (substr($str, 0, 7) == "http://") ? true : false;

// Task 12
$str = "https://google.com";
echo  (substr($str, 0, 8) == "https://" or substr($str, 0, 7) == "http://" ) ? true : false;

// Task 13
$str = "image.png";
echo  (substr($str, -4, 4) == ".png") ? true : false;

// Task 14
$str = "image.png";
echo (substr($str, -4, 4) == ".png" or substr($str, -4, 4) == ".jpg");

// Task 15
$str = "heymydear";
echo  (strlen($str) > 5) ? substr($str, 0, 5)."..." : $str;

// Task 16
$date = "31.12.2013";
echo str_replace(".", "-", $date);

// Task 17
$str = "beornottobearecity";
echo str_replace(["a", "b", "c"], [1, 2, 3], $str);

// Task 18
$str = "1a2b3c4b5d6e7f8g9h0";
echo  str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], "", $str);

// Task 19
$str = "lalahowtobecucumber";
echo  strtr($str, [
    "a" => 1,
    "b" => 2,
    "c" => 3,
]);

// Task 20
$str = "arrayandagain";
echo substr_replace($str, "!!!", 2, 5);

// Task 21
$str = "abc abc abc";
echo strpos($str, "b");

// Task 22
$str = "abc abc abc";
echo strrpos($str, "b");

// Task 23
$str = "abc abc abc";
echo strpos($str, "b", 2);

// Task 24
$str = "aaa aaa aaa aaa aaa";
echo strpos($str, " ", 4);

// Task 25
$str = "abs.fef..ueof.";
echo (strpos($str, "..")) ? true : false;

// Task 26
$str = "http://";
echo (strpos($str, "http://")) ? true : false;

// Task 27
$str = "html css php";
$arr = explode(" ", $str);
var_dump($arr);

// Task 28
$arr = ["html", "css", "php"];
$str = implode(", ", $arr);
echo $str;

// Task 29
$date = "2002-01-04";
$arr = explode(".", $date);
var_dump($arr);

// Task 30
$str = "1234567890";
$arr = str_split($str, 2);
var_dump($arr);

// Task 31
$str = "1234567890";
$arr = str_split($str, 1);
var_dump($arr);

// Task 32
$str = "1234567890";
$arr = implode("-", str_split($str, 2));
var_dump($arr);

// Task 33
$str = "  hello   ";
echo  trim($str);

// Task 34
$str = "/php/";
echo  trim($str, "/");

// Task 35
$str = "words words words";
echo  rtrim($str, ".").".";

// Task 36
$str = "12345";
echo  strrev($str);

// Task 37
$str = "madam";
echo  ($str == strrev($str)) ? true : false;

// Task 38
$str = "hello";
echo  str_shuffle($str);

// Task 39
$str = "abcdef";
 echo  str_shuffle($str);

 // Task 40
$str = "12345678";
echo number_format($str, 2, "" , " ");

// Task 41
for ($i=0; $i < 10; $i++){
    echo str_repeat("x", $i)."\n";
}

// Task 42
for ($i=1; $i < 10; $i++){
    echo  str_repeat("$i", $i)."\n";
}

// Task 43
$str = "html, <b>php</b>, js";
echo strip_tags($str);

// Task 44
$str = "html, <em>name</em>, <b>js</b>, <i>php</i>";
echo  strip_tags($str, ["<b></b>", "<i></i>"]);

// Task 45
$str = "html, <b>php</b>, js";
echo htmlspecialchars($str);

// Task 46
$arr = ["a", "b", "c"];
echo ord($arr[0])." ".ord($arr[1])." ".ord($arr[2]);

// Task 47
$upper = [65, 90];
$lower = [97, 122];

// Task 48
echo chr(33);

// Task 49
$str = chr(rand(65, 91));
echo $str;

// Task 50
$str = chr(rand(97, 122));
echo $str;

// Task 51
$str = "a";
if (ord($str) >= 65 and ord($str) <= 91){
    echo "Upper";
} elseif (ord($str) >= 97 and ord($str) <= 122){
    echo "Lower";
}

// Task 52
$str = "ab-cd-ef";
echo strchr($str, "-");

// Task 53
$str = "ab-cd-ef";
echo strrchr($str, "-");

// Task 54
$str = "ab--cd--ef";
echo strstr($str, "-");


