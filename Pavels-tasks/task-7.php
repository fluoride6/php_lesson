<?php
$H = date("H");
$i = date("i");

$ost_H = $H % 10;
switch ($ost_H) {
    case 1:
        echo "$H час ";
        break;
    case 2:
    case 3:
    case 4:
        echo "$H часа ";
        break;
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 0:
        echo "$H часов ";
        break;
}

$ost_i = $i % 10;
switch ($ost_i) {
    case 1:
        echo "$i минута";
        break;
    case 2:
    case 3:
    case 4:
        echo "$i минуты";
        break;
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 0:
        echo "$i минут";
        break;
}
