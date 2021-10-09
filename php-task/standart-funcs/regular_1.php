<?php
$date = date('Y.m.d H:i:s');
echo $date . '<br />';
$arr = preg_split('#\D+#', $date);
print_r($arr);
?>
