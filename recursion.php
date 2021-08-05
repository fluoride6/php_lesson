<?php
function func($a, $b)
{
    if ($b !== 0) {
        return $a * func($a, $b - 1);
    }

    return 1;
}

echo func(2, 4);

?>
