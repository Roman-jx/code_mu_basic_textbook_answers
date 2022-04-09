<?php
// Task 1
$str = 'a\\b c\\d e\\f';
echo preg_replace("#[a-z]\\\\[a-z]#", "!", $str);

// Task 2
$str = 'a\\b c\\\\d e\\\\\\f';
echo preg_replace("#[a-z]\\\\+[a-z]#", "!", $str);