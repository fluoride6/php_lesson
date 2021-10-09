<?php
$a = -5;
$b = 10;
if ($a >= 0 && $b >= 0) {
    $c = $a - $b;
} elseif ($a < 0 && $b < 0) {
    $c = $a * $b;
} else {
    $c = $a + $b;
}
echo $c;
