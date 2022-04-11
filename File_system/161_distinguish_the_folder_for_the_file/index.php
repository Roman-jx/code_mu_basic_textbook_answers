<?php
// Task 1
$path = "dir";
var_dump(is_file($path));

// Task 2
$path = "file.txt";
var_dump(is_dir($path));


// Task 3
var_dump(array_diff(scandir("dir/")), [".", ".."]);

// Task 4
var_dump(array_diff(scandir("dir/")), [".", ".."]);