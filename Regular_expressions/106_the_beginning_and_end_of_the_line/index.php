<?php
// Task 1
$str = 'abc def xyz';
echo preg_replace("#^[a-z]#", "!", $str);

// Task 2
$str = 'abc def xyz';
echo preg_replace("#[a-z]$#", "!", $str);