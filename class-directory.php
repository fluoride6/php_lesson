<?php
$dir = dir('W:\modules\conemu');
print_r($dir);
while (($file = $dir->read()) !== false) {
    echo $file . '<br />';
}


