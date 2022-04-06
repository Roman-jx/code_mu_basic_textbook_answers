<?php
//Task 1
$str = "abcde";
echo $str[0];
echo $str[2];
echo $str[-1];

//Task 2
$str = "abcde";
$revStr = $str[4].$str[3].$str[2].$str[1].$str[0];

//Task 3
$str = "abcde";
$num = 3;
echo $str[$num];

//Task 4
$str = "abcde";
echo $str[strlen($str)-1];

//Task 5
$str = "abcde";
echo $str[strlen($str)-2];

//Task 6
$str = "abcde";
echo $str[strlen($str)-3];

//Task 7
$str  = "12345";
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];

//Task 8
$str = (string)12345;
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];

//Task 9
$str = (string)12345;
$revStr = $str[strlen($str)-1].$str[strlen($str)-2].$str[strlen($str)-3].$str[strlen($str)-4].$str[strlen($str)-5];
echo $revStr;