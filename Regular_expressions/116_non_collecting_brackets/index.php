<?php
// Task 1
$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
$reg = "#(?:[a-z])+\$@([a-z])+\$@([a-z])+#";
preg_match_all($reg, $str, $res);
version_compare($res);