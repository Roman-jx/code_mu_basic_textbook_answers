<?php
// Task 1
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];
foreach ($products as $p => $f){
    echo $p." -> ".$f."<br>";
}

// Task 2
$products[] = [
    "name" => "something",
    "price" => 78,
    "amount" => 4,
];
