<?php
// Task 1
//var_dump(array_diff(scandir("dir")));

// Task 2
$text = "";
foreach (scandir("dir") as $key){
    if ("$key" == "." or "$key" == ".."){
        continue;
    } else {
        $text .= file_get_contents("dir/$key")." ";
    }
}
file_put_contents("new.txt", $text);
echo file_get_contents("new.txt");

// Task 3
foreach (scandir("dir") as $key){
    if ("$key" == "." or "$key" == "..") {
        continue;
    }else{
        file_put_contents("dir/$key", file_get_contents("dir/$key")."!");
    }
}


