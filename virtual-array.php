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

class MyArray implements ArrayAccess
{
    private $arr = [];

    public function offsetExists($offset)
    {
        return isset($this->arr[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->arr[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->arr[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->arr[$offset]);
    }

}

$a = new MyArray();
$list = new myClass($a);
$a['Name'] = 'Michael';
$a['Age'] = 26;
print_r($list);
?>
