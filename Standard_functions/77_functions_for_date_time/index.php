<?php
//// Task 1
//echo time();
//
//// Task 2
//echo mktime(23, 59, 59, 3, 1, 2025);
//
//// Task 3
//echo  mktime(23, 59, 59, 12, 31, 2022);
//
//// Task 4
//echo mktime(13, 12, 59, 3, 15, 2000);
//
//// Task 5
//echo mktime(7 , 23, 48, 3, 12, 2022) / 3600;
//
//// Task 6
//echo date("Y/m/d H:i:s");
//
//// Task 7
//echo  date ("Y-m-d , d.m.Y , d.m.y , H:i:s");
//
//// Task 8
//echo date("d.m.Y",  mktime(23, 59, 59, 2, 12, 25));
//
//// Task 9
//for ($i=0; $i < 7; $i++){
//    echo date("w", mktime(0, 0, 0, 6, $i, 2006));
//}
//
// // Task 10
//for ($i=0; $i<12; $i++){
//    echo date("m", mktime(0, 0, 0, $i, 0));
//}

// Task 11
echo date("d-m-Y", strtotime("2025-12-31"));

// Task 12
$date = date_create("2025-12-31");
date_modify($date, "2 day 1 month 3 day 1 year -3 day");
echo  date_format($date, "Y-m-d");

