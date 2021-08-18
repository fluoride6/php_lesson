<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$x = '';
$y = '';
$file = 'coordinates.txt';

if (isset($_POST['upload'])) {
    if (file_exists($file)) {
        $point = unserialize(file_get_contents($file));
        $x = $point->x;
        $y = $point->y;
    }
}

if (isset($_POST['save'])) {
    $point = new Point($_POST['x'], $_POST['y']);
    file_put_contents($file, serialize($point));
}
?>
<form method="post">
    <input type="text" name="x" value="<?= $x ?>"><br>
    <input type="text" name="y" value="<?= $y ?>"><br>
    <input type="submit" name="upload" value="Загрузить">
    <input type="submit" name="save" value="Сохранить">
</form>
