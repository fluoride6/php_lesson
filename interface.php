<?php

interface CanMove
{
    public function move();
}

interface CanFly
{
    public function fly();
}

class Car implements CanMove
{
    public function move()
    {
        return 'Движение автомобиля<br />';
    }
}

class Aircraft implements CanFly
{
    public function fly()
    {
        return 'Полёт самолёта<br />';
    }
}

$car = new Car();
echo $car->move();
$aircraft = new Aircraft();
echo $aircraft->fly();
?>
