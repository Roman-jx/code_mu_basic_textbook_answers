<?php
// Task 1
$str = "a.a aba aea";
echo preg_replace("#a\.a#", "!!", $str);

// Task 2
$str = '2+3 223 2223';
echo preg_replace("#2\+3#", "!!", $str);

// Task 3
$str = '23 2+3 2++3 2+++3 345 567';
echo preg_replace("#2\++3#", '!!', $str);

// Task 4
$str = '23 2+3 2++3 2+++3 345 567';
echo preg_replace("#2*3#", "!!", $str);

// Task 5
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
echo preg_replace("#\*q+\+#", "!!", $str);

// Task 6
$str = '[abc] {abc} abc (abc) [abc]';
echo preg_replace("#\[...\]#", "!", $str);
