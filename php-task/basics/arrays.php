<?php
$arr_1 = [1, 85, 6, 89, 4];
$arr_2 = [2, 62, 98, 7, 41, 56, 5];
$arr = array_merge($arr_1, $arr_2);
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i].', ';
}
echo '<br />';
for ($j = 0; $j < count($arr); $j++){
    if ($arr[$j] % 2 == 0){
        echo $arr[$j].'<br />';
    }
}
?>
