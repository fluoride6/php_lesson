<?php

class Point
{
    public $x = 5;
    public $y = 7;

    public function getX()
    {
        return $x;
    }

    public function getY()
    {
        return $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }
}

$reflection = new ReflectionClass('Point');

foreach ($reflection->getMethods() as $method) {
    var_dump($method);
}
echo '<br />';

foreach ($reflection->getProperties() as $property) {
    var_dump($property);
}

