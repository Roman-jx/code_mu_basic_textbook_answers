<?php
// Task 1
$arr = [
    ['href'=>'page1.html', 'text'=>'text1'],
    ['href'=>'page2.html', 'text'=>'text2'],
    ['href'=>'page3.html', 'text'=>'text3'],
];
foreach ($arr as $a){
    echo "<li><a href={$a['href']}>{$a['text']}</a></li>";
}

// Task 2
$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];
foreach ($arr as $a){
    echo "<option value='{$a['value']}'>{$a['text']}</option>";
}