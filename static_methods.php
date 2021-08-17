<?php

class point
{
    public const x = 3;

    private static $counter = 0;

    public static function x2()
    {
        self::$counter++;
        return self::x ** 2;
    }

    public static function cos($y)
    {
        self::$counter++;
        return cos($y);
    }


    public static function getCounter()
    {
        return self:: $counter;
    }
}

echo point::x2() . '<br />';
echo point::cos(10) . '<br />';
echo point::getCounter();
?>
