<?php
$arr = [4, 558, 63, 8, 3];
$arr_1 = [4, 85, 688, 36, 445, 36];
$arr_2 = [35.2, 574.8];
function summa(&$arr){
    if (!is_array($arr)){
        echo 'Некорректный массив';
        return;
    }
    if (count($arr) == 0){
        echo 'Некорректный массив';
        return;
    }
    if (is_numeric($arr)){
        echo 'Некорректный массив';
        return;
    }
    for ($i = 0; $i < count($arr); $i++){
        $sum_arr += $arr[$i];
    }
    echo 'Сумма элементов массива равна '.$sum_arr;
}
echo summa($arr).'<br />';
echo summa($arr_1).'<br />';
echo summa($arr_2).'<br />';
?>
