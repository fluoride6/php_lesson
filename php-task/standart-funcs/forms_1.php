<?php
$summa = false;
$x = false;
$y = false;
if (isset($_POST['myform'])) {
    $x = $_POST['x'] ?? false;
    $y = $_POST['y'] ?? false;
    if ($x !== false && $y !== false && is_numeric($x) && is_numeric($y)) $summa = $x + $y;
}
?>
<?php if ($summa !== false) : ?><p>Сумма равна: <?= $summa ?></p><?php endif ?>
<?php include 'form.php' ?>
