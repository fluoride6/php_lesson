<?php
$arr = [58, 63, 50, 55, 86];
$ran = $arr[mt_rand(0, count($arr) - 1)];
print_r($ran);


echo '<br />';
$a = [
    [
        'name' => "Igor",
        'age' => 26
    ],
    [
        'name' => "Sam",
        'age' => 35
    ],
    [
        'name' => "Alex",
        'age' => 15
    ]
];
function sorting($a, $b)
{
    return $a['age'] <=> $b['age'];
}

uasort($a, 'sorting');

echo '<pre>';
print_r($a);
echo '</pre>';
?>
