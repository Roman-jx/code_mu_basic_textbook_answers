<?php
// Task 1
$str = 'aa aba abba abbba abca abea';
echo preg_replace("#ab+a#", "!!", $str);

// Task 2
$str = 'aa aba abba abbba abca abea';
echo preg_replace("#ab*a#", "!!", $str);

// Task 3
$str = 'aa aba abba abbba abca abea';
echo preg_replace("#ab?a#", "!!", $str);

// Task 4
$str = 'aa aba abba abbba abca abea';
echo preg_replace("#ab*a#", "!!", $str);
