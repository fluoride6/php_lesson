<?php
$reg = '/[a-z0-9_]+([0-9a-z]+[0-9a-z]*\.)+([a-z]){2,6}/';
$a = 'hfudo.jg6.com';
echo preg_match($reg, $a) . '<br />';

$text = 'Буду рад вас видеть на моем сайте abc.abc.abc. Так же мой запасной сайт: cgh.djdpj.cv.';

$text = preg_replace($reg, 'ССЫЛКИ ЗАПРЕЩЕНЫ', $text);
echo $text;
?>
