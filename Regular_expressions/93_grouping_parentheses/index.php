<?php
// Task 1
$str = 'aa aba abba abbba abca abea';
echo  preg_replace("#(ab)+#", "!!", $str);
