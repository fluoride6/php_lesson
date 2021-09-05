<?php
$date = new DateTime();
$date_1 = new DateTime();
$date->setDate(mt_rand(2000, 2030), mt_rand(1, 12), mt_rand(1, 30));
$date->setTime(mt_rand(0, 23), mt_rand(0, 59), mt_rand(0, 59));
echo $date->format('d.m.Y H:i:s') . '<br />';
$date_1->setDate(mt_rand(2000, 2030), mt_rand(1, 12), mt_rand(1, 30));
$date_1->setTime(mt_rand(0, 23), mt_rand(0, 59), mt_rand(0, 59));
echo $date_1->format('d.m.Y H:i:s') . '<br />';
$interval = $date->diff($date_1);
echo $interval->d . '<br>';
echo $interval->h . '<br>';
echo $interval->i . '<br>';
echo $interval->s . '<br>';
$interval_1 = new DateInterval('P1D');
$period = new DatePeriod($date, $interval_1, $interval->d);
foreach ($period as $dt) {
    echo $dt->format('d.m.Y H:i:s') . '<br>';
}
?>
