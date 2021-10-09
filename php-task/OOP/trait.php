<?php

trait CanMove
{
    public function move()
    {
        return 'Движение автомобиля<br />';
    }
}

trait CanFly
{
    public function fly()
    {
        return 'Полёт самолёта<br />';
    }
}

class Car
{
    use CanMove;
}

class Aircraft
{
    use CanFly;
}

$car = new Car();
echo $car->move();
$aircraft = new Aircraft();
echo $aircraft->fly();
?>
