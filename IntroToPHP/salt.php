<?php

$lbs = $_GET['lbs'];

$subtotal = rockSaltCost($lbs);

$shipping = rockSaltShippingCost($lbs);

$tax = ($subtotal + $shipping) * .07;

$total = $subtotal + $shipping + $tax;

echo "Lbs: $lbs Subtotal: $subtotal Shipping: $shipping Tax: $tax Total: $total";


function rockSaltCost($lbs)
{
    return $lbs * .14;
}

function rockSaltShippingCost($lbs)
{
    $bags = ceil($lbs/50); 
    
    $pallets = (int)($bags / 40);
    
    $bags = $bags % 40; 
    
    $gaggles = (int)($bags / 8);
    
    $bags = $bags % 8;
    
    return ($pallets * 50) + ($gaggles * 12) + ($bags * 5);
    
}