<?php

class Point
{

    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        $data = '(' . $this->x . ', ' . $this->y . ')';
        return $data;
    }

    public function __get($z)
    {
        if (isset($this->z)) return $this->z;
        return 'Класс Point работает только в двумерном пространстве';
    }

    public function __set($z, $value)
    {
        if (isset($this->z)) return $this->z;
        return 'Класс Point работает только в двумерном пространстве';
    }

    public function __call($method, $z)
    {
        return 'Класс Point работает только в двумерном пространстве';
    }

    public function __clone()
    {
        $this->x = 95;
        $this->y = 75;
    }
}

$pointOne = new Point(12, 24);
echo "Точки координат $pointOne;" . '<br />';

$pointTwo = new Point(48, 64);
echo "Точки координат $pointTwo" . '<br />';

$pointThree = new Point(128, 256);
echo "Точки координат $pointThree" . '<br />';

echo $pointThree->z . '<br>';

echo $pointThree->z = 15 . '<br />';

echo $pointThree->setZ(12, 24, 48) . '<br />';

$point = new Point(512, 1024);
echo 'Точки координат' . $point . '<br />';

$clonePoint = clone $point;
echo 'Точки координат ' . $clonePoint . '<br />';
?>