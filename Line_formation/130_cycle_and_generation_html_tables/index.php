<?php
// Task 1
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];
echo "<table>";
foreach ($products as $user){
    echo "<tr>";

    echo "<td>{$user['name']}</td>";
    echo "<td>{$user['price']}</td>";
    echo "<td>{$user['amount']}</td>";

    echo "</tr>";
}
echo "</table>";