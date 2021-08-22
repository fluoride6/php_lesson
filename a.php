<?php

namespace ru\canmove;

trait CanMove
{
    public function move()
    {
        return 'Движение автомобиля<br />';
    }
}

class Car
{
    use CanMove;
}

?>