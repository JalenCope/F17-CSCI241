<?php

if(isset($_COOKIE['visited']))
{
    //read that cookie
    //increment it
    //set it back
    $visited = $_COOKIE['visited'];
    $visited++;
}
else {
    $visited=1;
}

//header('Set-Cookie: visited=' . $visited);
//header('Set-Cookie: visited=' . $visited . '; Expires=Mon, 06 Nov 2017 18:20:00 GMT');  //Expires at end of class
//header('Set-Cookie: visited=' . $visited . '; Max-Age=' . 60*60*24*2); //Expires in two days

setrawcookie("visited", $visited, time() + 60*5); //Expires in 5 minutes 


echo "You have visited " . $visited . " times.";