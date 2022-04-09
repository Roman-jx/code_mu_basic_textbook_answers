<?php
//  Task 1
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace("#ab{2,4}a#", "!", $str);

// Task 2
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace("#ab{3}a#", "!", $str);

// Task 3
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace("#ab{4}a#", "!", $str);

