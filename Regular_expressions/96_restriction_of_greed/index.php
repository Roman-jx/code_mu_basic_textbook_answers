<?php
// Task 1
$str = 'aba accca azzza wwwwa';
echo preg_replace("#a.+a#", "!", $str);