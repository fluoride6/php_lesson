<?php
$a = function ($arr) {
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i] / count($arr);
    }
    echo $sum;
};

$a([26, 7, 3]);

echo '<br />';

$arr2 = [
    [23, 67, 8],
    [52, 49, 1],
    [26, 5, 7]
];

function gener($array, $func)
{
    foreach ($array as $v) {
        echo $func($v) . '<br />';
    }
}

echo gener($arr2, $a);
?>
