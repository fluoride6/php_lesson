<?php
$arr = [58.36, 63.71, 50.6, 55, 86.45];
for ($i = 0; $i < count($arr); $i++) {
    $v[] = $arr[$i] * 0.77;
}
print_r($v);
echo '<br />';

for ($i = 0; $i < count($v); $i++) {
    echo round($v[$i], 2) . ', ';
}

echo '<br />';
echo '<br />';

$x = false;
$y = false;

if (isset($_POST["form"])) {
    $x = $_POST['x'] ?? false;
    $y = $_POST['y'] ?? false;
    if ($x !== false && $y !== false && $x !== "" && $y !== "") {
        echo mt_rand($x, $y);
    }
}
?>
<form name="form" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    <div>
        x: <input type="text" name="x" value="<?= $x ?>" )/>
    </div>
    <div>
        y: <input type="text" name="y" value="<?= $y ?>" )/>
    </div>
    <div>
        <input type="submit" name="form" value="сгенерировать" )/>
    </div>
</form>
