<?php
// Task 1
rename("old.txt", "new.txt");

// Task 2
rename("file.txt", "dir/file.txt");

// Task 3
rename("dir1/file.txt", "dir2/file.txt");

// Task 4
for($i=1; $i<=5; $i++){
    copy("file.txt", "copy/file$i.txt");
}

// Task 5
for ($i=1; $i<=3; $i++){
    unlink("$i.txt");
}

// Task 6
echo filesize("size.txt");

// Task 7
echo filesize("size.txt") / 1024;

// Task 8
echo filesize("size.txt") / (1024 * 1024);

// Task 9
echo filesize("size.txt") / (1024 * 1024) * 1024;

// Task 10
if (file_exists("file.txt")){
    echo filesize("file.txt");
} else {
    echo "Not found...";
}

// Task 11
if (file_exists("file.txt")){
    echo filesize("file.txt");
} else {
    file_put_contents("file.txt", "!");
}

// Task 12
if (file_exists("file.txt")){
    echo file_get_contents("message.txt");
} else {
    file_put_contents("message.txt", "hello");
}