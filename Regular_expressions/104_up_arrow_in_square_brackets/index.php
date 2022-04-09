<?php
// Task 1
$str = '^xx axx ^zz bkk @ss';
echo preg_replace("#[\^@]\w#", "!", $str);

// Task 2
$str = '^xx axx ^zz bkk @ss';
echo preg_replace("#[^@^]\w#", "!", $str);

// Task 3
$str = '^xx axx ^zz bkk';
echo preg_replace("#[^\^]\w#", "!", $str);