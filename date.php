<?php
$start = microtime(true);
for ($i = 0; $i < 10 ** 7; $i++) ;

$time = time();
$time_1 = time() + mt_rand(1, 10) * 10000;
echo date('d.m.Y H:i:s', $time) . '<br />';
echo date('d.m.Y H:i:s', $time_1) . '<br />';

echo 'времени до второй даты осталось: ';
echo date('H:i:s', ($time_1 - $time)) . '<br />';


if (isset($_POST["form"])) {
    function getGM($local)
    {
        $offset = date("Z", $local);
        return $local - $offset;
    }

    //echo date('Y.m.d H:i:s', getGM(time())); /*по гринвичу*/

    function getLM($gm, $offset)
    {
        return $gm + $offset;
    }

    if ($x = $_POST['x'] ?? false) {


        echo date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * 5));
    } elseif ($y = $_POST['x'] ?? false) {


        echo date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * 3));
    } elseif ($z = $_POST['x'] ?? false) {

        echo date('Y.m.d H:i:s', getLM(getGM(time()), 3600 * -7));
    }

}
echo '<br />' . '<br />';
echo 'Скрипт выполнялся: ' . (microtime(true) - $start);

//форму я еще закончу, над ней чуть подумать надо
?>
<form name="form" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <select class="form-control" name="time_zones">
        x:
        <option value="GMT_5">GMT+5</option>
        y:
        <option value="GMT_3">GMT+3</option>
        z:
        <option value="GMT_7">GMT-7</option>
    </select>
</form>
