<?php
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "summa":
            return $arg1 + $arg2;
        case "subtraction":
            return $arg1 - $arg2;
        case "multiplication":
            return $arg1 * $arg2;
        case "divide":
            if ($arg2 == 0) {
                echo 'invalid arg2 value';
                break;
            }
            return $arg1 / $arg2;
    }
}
echo mathOperation(8, 0, "divide");
