<?php
$a = function($s, $x)
{
    echo $s + $x.'<br />';
};
$a(10, 5);

echo '<br />';

function test($y, $func){
    foreach ($y as $v){
        if (count($y) % 2 !== 0)
            continue;
        echo $v.'<br />';
    }
    echo $func;
}

echo test([2, 45, 63, 8, 36], $a(3, 16));
?>
