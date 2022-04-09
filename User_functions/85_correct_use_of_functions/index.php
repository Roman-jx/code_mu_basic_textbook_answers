<?php
// Task 1
function getDigitsSum($num){
    return array_sum(str_split($num, 1));
}
for ($i=1; $i<2030; $i++){
    if (getDigitsSum((string)$i) == 13){
        echo $i."\n";
    }
}

