<?php

abstract class Shape
{
    abstract public function draw();
}

class Point extends Shape
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function draw()
    {
        return 'Рисуем точку с координатами x = ' . $this->x . ' и y = ' . $this->y;
    }
}

$point = new Point(15, 4);
echo $point->draw();
?>
