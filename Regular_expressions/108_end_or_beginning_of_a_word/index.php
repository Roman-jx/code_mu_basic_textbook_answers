<?php
// Task 1
$str = 'aaa xaa aaa xbb aaa';
echo  preg_replace("#\bx#", "!", $str);