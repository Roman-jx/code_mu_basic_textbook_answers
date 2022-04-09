<?php
// Task 1
$reg = "#[a-z0-9]\.[a-z]{2,}#";
$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -
foreach ($arr as $a){
    echo preg_match($reg, $a)."\n";
}

// Task 2
$reg = "#[a-z0-9]+@[a-z]+\.[a-z]+#";
$arr[] = 'addr@mail.ru';    // +
$arr[] = 'addr123@mail.ru'; // +
$arr[] = 'my-addr@mail.ru'; // +
$arr[] = 'my_addr@mail.ru'; // +
$arr[] = 'addr@site.ru';    // +
$arr[] = 'addr.ru';         // -
$arr[] = 'addr@.ru';        // -
$arr[] = 'my@addr@mail.ru'; // -
foreach ($arr as $a){
    echo preg_match($reg, $a)."\n";
}