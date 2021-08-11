<?php
$reg = '#/7abc#';
$reg_1 = '#57abd#';
$str = '57abc';
$a = 'a7cdc';
$s = 'A889c';
echo preg_match($reg, $str) . '<br />';
echo preg_match($reg, $a) . '<br />';
echo preg_match($reg, $s) . '<br />';
echo preg_match($reg_1, $str) . '<br />';
echo preg_match($reg_1, $a) . '<br />';
echo preg_match($reg_1, $s) . '<br />';
?>
