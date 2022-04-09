<?php
// Task 1
$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
$sum = 0;
foreach ($arr as $a){
    foreach ($a as $item){
        $sum += $item;
    }
}
echo  $sum;

// Task 2
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];
$sum = 0;
foreach ($arr as $a){
    foreach ($a as $item){
        foreach ($item as $i){
            $sum += $i;
        }
    }
}
echo  $sum;

// Task 3
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
foreach ($arr as $key => $value){
    foreach ($value as $k => $v){
        echo  $k." - ".$v."<br>";
    }
}

// Task 4
$arr = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];
foreach ($arr as $key => $value){
    for ($i=0; $i < count($value); $i++){
        echo  $key." - ".$value[$i]."<br>";
    }
}
