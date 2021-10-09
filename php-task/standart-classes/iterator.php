<?php

class myClass implements Iterator
{
    private $index = 0;
    private $list;

    public function __construct($array)
    {
        $this->list = $array;
    }

    public function key()
    {
        return $this->index;
    }

    public function next()
    {
        $this->index++;
    }

    public function current()
    {
        return $this->list[$this->index];
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function valid()
    {
        return isset($this->list[$this->index]);
    }
}

$arr = ['Max', 'Igor', 'Fedor', 'Mikhail', 'Juliya'];
$list = new myClass($arr);

foreach ($list as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}
