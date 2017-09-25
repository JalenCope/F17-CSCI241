<?php
$bin = 0b10100011; //163 in decimal
$oct = 0123; //83 in decimal
$dec = 123; //123 in decimal
$hex = 0x64; //100 in decimal

var_dump($dec == $oct); //is bool(false)

var_dump(PHP_INT_MAX);

var_dump(PHP_INT_MAX+1);

var_dump(floor((0.1+0.7)*10));