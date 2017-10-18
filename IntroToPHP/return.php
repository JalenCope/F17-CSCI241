<?php

/*function world()
{
    $world = "world";
    return $world;
}

echo "Hello " . world();
 * 
 */

function greet($firstname, $lastname)
{
    $firstname = strtoupper($firstname);
    $lastname = strtoupper($lastname);
    return array($firstname, $lastname); //Return first and last name
}

$name = greet("Andrew", "Besmer");

echo "Hello " . $name[0] . " " . $name[1];