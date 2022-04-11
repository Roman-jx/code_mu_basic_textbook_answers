<?php
// Task 1
mkdir("dir");

// Task 2
$arr = ["name", "surname", "age"];
foreach ($arr as $a){
    mkdir("$a");
}

// Task 3
mkdir("test");
for($i=1; $i<=3; $i++){
    file_put_contents("test/$i.txt", "$i");
}

// Task 4
rename("dir2", "test");
