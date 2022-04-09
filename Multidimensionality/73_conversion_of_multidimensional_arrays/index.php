<?php
//// Task 1
$arr = [
    [
        'country' => 'Россия',
        'city' =>    'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Минск',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Питер',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Могилев',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Киев',
    ],
];
$arr2 = [];
foreach ($arr as $a){
    if ($a["country"] == "Украина"){
        $arr2["Украина"][] = $a["city"];
    } elseif($a["country"] == "Беларусь") {
        $arr2["Беларусь"][] = $a["city"] ;
    } elseif ($a["country"] == "Россия") {
        $arr2["Россия"][] = $a["city"];
    }
}
var_dump($arr2);

// Task 2
$arr = [
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];
$arr2 = [];
foreach ($arr as $a){
    foreach ($a as $key => $value){
        $d = "";
        if ($key == "date" and $value == "2019-12-29") {
            $d = $value;
            $arr2[$d] = [];
        } elseif ($key == "event"){
            $arr2[$d] = $value;
            $d = "";
        } elseif ($key == "date" and $value == "2019-12-30"){
            $d = $value;
            $arr2[$d] = [];
        } elseif ($key == "event") {
            $arr2[$d] = $value;
            $d = "";
        } elseif ($key == "date" and $value == "2019-12-31"){
            $d = $value;
            $arr2[$d] = [];
        } elseif ($key == "event"){
            $arr2[$d] = $value;
            $d = "";
        }
    }
}
var_dump($arr2);

// Task 3
$arr = [
    '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30'=> ['name5', 'name6', 'name7'],
    '2019-12-31'=> ['name8', 'name9'],
];
$arr2 = [];
foreach ($arr as $key => $value){
    if ($key == "2019-12-29"){
        for ($i=0; $i<count($value); $i++) {
            $arr2[] = [
                "date" => "2019-12-29",
                "event" => $value[$i],
            ];
        }
    } elseif ($key == "2019-12-30"){
        for ($i=0; $i < count($value); $i++){
            $arr2[] = [
                "date" => "2019-12-30",
                "event" => $value[$i],
            ];
        }
    } elseif ($key == "2019-12-31"){
        for ($i =0; $i< count($value); $i++){
            $arr2[] = [
                "date" => "2019-12-31",
                "event" => $value[$i],
            ];
        }
    }
}
var_dump($arr2);