<?php

function diff($a, $b, $abs = false)
{
    if($abs == true)
    {
        return abs($a - $b);
    }
    else
    {
        return $a - $b;
    }
}

echo diff(1,10, true);