<?php

class point
{
    public $x = 3;
    public $y = 7;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
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

$point = new point(5, 15);
echo $point->x . '<br />';
echo $point->y . '<br />';

echo $point->getX() . '<br />';
echo $point->getY() . '<br />';

$point->setX(41);
$point->setY(4);
echo $point->getX() . '<br />';
echo $point->getY() . '<br />';

?>