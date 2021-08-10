<?php
$ip_adress = gethostbyname('google.ru');
echo $ip_adress;
echo '<br />';
$hostname = gethostbyaddr($ip_adress);
echo $hostname;
?>
