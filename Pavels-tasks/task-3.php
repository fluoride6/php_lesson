<?php
function summa($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function subtraction($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function divide($arg1, $arg2)
{
    return ($arg2 == 0) ? "invalid arg2 value" : $arg1 / $arg2;
}

echo summa(10, 5) . '<br />';
echo subtraction(10, 3) . '<br />';
echo multiply(15, 8) . '<br />';
echo divide(80, 0);
