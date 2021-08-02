<?php
$arr = [1, 2, 56, 58, 78, 8, 9, -3, 36, 52];
$summa = 0;
for ($i = 0; $i < count($arr); $i++){
    $summa += $arr[$i];
}
echo $summa;

?>
