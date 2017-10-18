<?php

$x = 5;

function changeVar($x)
{
    $x = 12;
//    return $x;
}

$x = changeVar($x);

echo $x;