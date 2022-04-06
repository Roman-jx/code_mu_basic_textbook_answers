<?php
// Task 1
$test = 0;
if (isset($test)){
    echo "+";  //answer
} else {
    echo "-";
}

//Task 2
$test = null;
if (!isset($test)){
    echo "+";  //answer
} else {
    echo "-";
}

//Task 3
$test = null;
if (isset($test)){
    echo "+";
} else {
    echo "-"; //answer
}

//Task 4
if (!isset($test)){
    echo "+"; //answer
} else {
    echo "-";
}

//Task 5
$test = "";
if (isset($test)){
    echo "+";  //answer
} else {
    echo "-";
}

//Task 6
if (!isset($test)){
    echo "+";  //answer
} else {
    echo "-";
}

//Task 7
$test = false;
if (isset($test)){
    echo "+";  //answer
} else {
    echo "-";
}

//Task 8
$arr = [1,2,3,4,5];
if (isset($arr)){
    echo  "+"; //answer
} else {
    echo  "-";
}