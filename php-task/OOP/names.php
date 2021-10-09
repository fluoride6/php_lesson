<?php

use ru\canmove\Car;
use ru\canfly\Aircraft;

require_once 'a.php';
require_once 'b.php';

$car = new Car();
echo $car->move();
$aircraft = new Aircraft();
echo $aircraft->fly();
?>