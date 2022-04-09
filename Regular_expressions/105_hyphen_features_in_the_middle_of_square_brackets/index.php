<?php
// Task 1
$str = 'xaz xBz xcz x-z x@z';
echo preg_replace("#x[a-z-A-z]z#", "!", $str);

// Task 2
$str = 'xaz x$z x-z xcz x+z x%z x*z';
echo preg_replace("#x[\$\-\+]z#", "!", $str);
