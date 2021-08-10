<?php
$f = fopen(__FILE__, 'r');
if (!flock($f, LOCK_EX || LOCK_NB)) {
    die ('Script is already running');
}
echo fileowner('a.txt') . '<br />';
chmod('a.txt', 1000);
echo decoct(fileperms('a.txt'));

sleep(5);
?>
