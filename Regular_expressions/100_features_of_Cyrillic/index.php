<?php
// Task 1
$str = 'wйw wяw wёw wqw';
echo preg_replace("#w[а-я]w#", "!", $str);

// Task 2
$str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
echo preg_replace("#[а-яё]#u", "!", $str);

