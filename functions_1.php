<?php
$a = 5;
$s = 12;
function testGlobal() {
    global $a;
    global $s;
    $sum = $a + $s;
    echo $sum;
}
testGlobal();
?>
