<?php
error_reporting(E_ALL);
$arr = [
    [
        'name' => "Michael",
        'age' => 26
    ],
    [
        'name' => "Alex",
        'age' => 37
    ],
    [
        'name' => "Egor",
        'age' => 21
    ]
];
$summa = 0;
foreach ($arr as $item)
    $summa += $item['age'];
$result = $summa / count($arr);
echo $result;
?>
