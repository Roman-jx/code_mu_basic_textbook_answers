<?php
// Task 1
$num = 5;
$count = 0;
while ($num < 1000){
    $num *= 3;
    $count++;
}
echo  $num;
echo $count;

// Task 2
for ($num = 5, $i = 0; $num < 1000; $num *= 3, $i++ ){
    echo $num."-".$i."<br>";
}