<?php
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo 'The address of the server PHP code is run on - ' . $_SERVER[SERVER_ADDR] . '<br />';
echo 'Имя и версия информационного протокола, через который была запрошена страница - ' . $_SERVER[SERVER_PROTOCOL];
?>