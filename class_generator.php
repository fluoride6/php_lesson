<?php
$option = [
    'start' => 0,
    'to' => 100,
    'step' => 1
];

class gen
{
    public $start;
    public $to;
    public $step;

    function __construct($start, $to, $step)
    {
        $this->start = $start;
        $this->to = $to;
        $this->step = $step;
    }

    function generate()
    {
        for ($i = $this->start; $i < $this->to; $i += $this->step) {
            yield $i;
        }
    }

    function send($step)
    {
        $this->step = $step;
    }
}

$obj = new gen($option['start'], $option['to'], $option['step']);


$gen = $obj->generate();
foreach ($gen as $value) {
    echo $value . "\n";

    if ($value != 0)
        $obj->send($value);
}
