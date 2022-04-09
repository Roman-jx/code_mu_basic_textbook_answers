
<?php
// Task 1
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace("#a.b#", "!!!", $str);

// Task 2
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace("#a..b#", "!!!!", $str);

