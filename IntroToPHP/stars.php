<?php

$blockSize = 4;

for($r=0; $r<$blockSize; $r++)
{
    for($c=0; $c < $blockSize - $r; $c++)
    {
        echo "*";
    }
    echo "<br>";
}