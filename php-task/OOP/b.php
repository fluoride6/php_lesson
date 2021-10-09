<?php

namespace ru\canfly;

trait CanFly
{
    public function fly()
    {
        return 'Полёт самолёта<br />';
    }
}


class Aircraft
{
    use CanFly;
}

?>