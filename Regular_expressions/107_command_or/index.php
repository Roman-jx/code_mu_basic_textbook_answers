<?php
// Task 1
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace("#ae+|x+a#", "!", $str);

// Task 2
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace("#ae{2}|x+a#", "!", $str);