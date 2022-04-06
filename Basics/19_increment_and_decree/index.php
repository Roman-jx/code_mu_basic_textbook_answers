<?php
//Task 1
$num = 10;
$num++;
$num++;
$num--;
echo  $num;

//Task 2
$num = 3;
echo ++$num; //4

//Task 3
$num = 3;
echo $num++; //3

//Task 4
$num = 3;
echo --$num; //2

//Task 5
$num = 3;
echo  $num--;//3

//Task 6
$num1 = 3;
$num2 = ++$num1;
echo  $num1; //4
echo  $num2; //4

//Task 7
$num1 = 3;
$num2 = $num1++;
echo  $num1; // 4
echo  $num2; // 3

//Task 8
$num1 = 3;
$num2 = --$num1;
echo  $num1; // 2
echo  $num2; // 2

//Task 9
$num1 = 3;
$num2 = $num1--;
echo  $num1; // 2
echo  $num2; // 3

//Task 10
$num1 = 3;
$num1++;
$num2 = $num1--;
echo $num1++; //3
echo --$num2; //3